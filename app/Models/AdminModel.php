<?php
declare(strict_types=1);

namespace App\Models;

use PDO;

class AdminModel {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function verifyUser(string $email, string $password): bool {
        $stmt = $this->db->prepare("SELECT password_hash FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $row = $stmt->fetch();
        if ($row && password_verify($password, $row['password_hash'])) {
            return true;
        }
        return false;
    }

    public function getAll(string $table): array {
        $allowed = ['faqs', 'services', 'products', 'testimonials'];
        if (!in_array($table, $allowed, true)) {
            return [];
        }
        $stmt = $this->db->query("SELECT * FROM $table ORDER BY display_order ASC");
        return $stmt->fetchAll();
    }

    public function insert(string $table, array $data): bool {
        $allowed = ['faqs', 'services', 'products', 'testimonials'];
        if (!in_array($table, $allowed, true)) {
            return false;
        }
        $columns = implode(',', array_keys($data));
        $placeholders = implode(',', array_fill(0, count($data), '?'));
        $stmt = $this->db->prepare("INSERT INTO $table ($columns) VALUES ($placeholders)");
        return $stmt->execute(array_values($data));
    }

    public function delete(string $table, int $id): bool {
        $allowed = ['faqs', 'services', 'products', 'testimonials'];
        if (!in_array($table, $allowed, true)) {
            return false;
        }
        $stmt = $this->db->prepare("DELETE FROM $table WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
