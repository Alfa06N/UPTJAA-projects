<?php
class UserController {
    public function index() {
        echo "UserController is working perfectly!";
        
        // Test database connection (optional)
        // try {
        //     $db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        //     echo "<br>Database connection successful!";
        // } catch (PDOException $e) {
        //     echo "<br>Database connection failed: " . $e->getMessage();
        // }
    }
}