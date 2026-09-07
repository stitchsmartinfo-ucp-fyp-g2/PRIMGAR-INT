<?php
declare(strict_types=1);

namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static ?PDO $instance = null;

    public static function getInstance(array $config): PDO {
        if (self::$instance === null) {
            try {
                // Modified for Vercel: Always use SQLite
                $dbPath = dirname(__DIR__, 2) . '/storage/database.sqlite';
                $dsn = "sqlite:" . $dbPath;
                self::$instance = new PDO($dsn, null, null, [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ]);
            } catch (PDOException $e) {
                die('Database Connection Error: ' . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
