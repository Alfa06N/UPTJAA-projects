<?php
class User {
    private $db;
    
    public function __construct() {
        $this->db = (new Database('your_database_name'))->getConnection();
    }
    
    public function getAll() {
        $result = $this->db->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}