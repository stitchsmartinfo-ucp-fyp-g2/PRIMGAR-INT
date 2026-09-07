<?php
declare(strict_types=1);

namespace App\Models;

use RuntimeException;
use SQLite3;

final class RfqRepository
{
    public function __construct(private string $storagePath)
    {
        if (!is_dir($storagePath) && !mkdir($storagePath, 0755, true) && !is_dir($storagePath)) {
            throw new RuntimeException('RFQ storage directory could not be created.');
        }
    }

    /** @param array{name:string,email:string,phone:string,category:string,quantity:?int,details:string} $rfq */
    public function create(array $rfq): void
    {
        if (class_exists(SQLite3::class)) {
            try {
                $this->saveToSqlite($rfq);
                return;
            } catch (\Throwable) {
                // Some shared hosts expose SQLite3 but do not allow a writable database file.
            }
        }

        $this->saveToJson($rfq);
    }

    private function saveToSqlite(array $rfq): void
    {
        $db = new SQLite3($this->storagePath . '/.primgar_intl.sqlite');
        $db->exec('CREATE TABLE IF NOT EXISTS rfqs (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT NOT NULL, email TEXT NOT NULL, phone TEXT, category TEXT, quantity INTEGER, details TEXT, created_at TEXT NOT NULL)');
        $statement = $db->prepare('INSERT INTO rfqs (name, email, phone, category, quantity, details, created_at) VALUES (:name, :email, :phone, :category, :quantity, :details, :created_at)');
        foreach ($rfq as $field => $value) {
            $statement->bindValue(':' . $field, $value, $field === 'quantity' ? SQLITE3_INTEGER : SQLITE3_TEXT);
        }
        $statement->bindValue(':created_at', gmdate('c'), SQLITE3_TEXT);
        if (!$statement->execute()) {
            throw new RuntimeException('RFQ could not be saved.');
        }
    }

    private function saveToJson(array $rfq): void
    {
        $file = $this->storagePath . '/.rfqs.json';
        $handle = fopen($file, 'c+');
        if ($handle === false || !flock($handle, LOCK_EX)) {
            throw new RuntimeException('RFQ storage is unavailable.');
        }
        $contents = stream_get_contents($handle);
        $rfqs = $contents === '' ? [] : json_decode($contents, true, 512, JSON_THROW_ON_ERROR);
        $rfq['created_at'] = gmdate('c');
        $rfqs[] = $rfq;
        rewind($handle);
        ftruncate($handle, 0);
        fwrite($handle, json_encode($rfqs, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR));
        fflush($handle);
        flock($handle, LOCK_UN);
        fclose($handle);
    }
}
