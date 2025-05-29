<?php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'Cachapa1*';
    private $dbname = "practice";
    private $connection;
    
    public function __construct($dbname) {
        $this->dbname = $dbname;
        $this->connect();
    }
    
    private function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
    
    public function getConnection() {
        return $this->connection;
    }
}