<?php

require_once __DIR__ . '/../models/User.php';
class UserController {
    private $db;
    private $userModel;

    public function __construct($db) {
        $this->db = $db;
        $this->userModel = new User($db);
    }

    public function store() {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if (strlen($username) >= 3 && strlen($password) >= 8) {
                if ($this->userModel->create($username, $password)) {
                    header('Location: /UPTJAA-projects/form');
                    exit;
                } else {
                    $error = "Error al registrar el usuario.";
                }
            } else {
                $error = "Datos inválidos. El nombre de usuario debe tener al menos 3 caracteres y la contraseña al menos 8.";
            }
            return $error;
        }
    }

    public function getAllUsers() {
        return $this->userModel->getAll();
    }
}