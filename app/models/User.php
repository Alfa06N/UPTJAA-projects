<?php
class User {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
        $this->createTableIfNotExists();
    }

    public function createTableIfNotExists() {
        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        $this->db->exec($sql);
    }

    public function create($username, $password) {
        $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        return $stmt->execute([$username, password_hash($password, PASSWORD_DEFAULT)]);
    }
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public function getAll() {
        $result = $this->db->query("SELECT * FROM users");
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}