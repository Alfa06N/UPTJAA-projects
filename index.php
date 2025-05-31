<?php
// Conexión a la base de datos
$db = new PDO('mysql:host=localhost;dbname=practice', '', '');

$url = isset($_GET['url']) ? trim($_GET['url'], '/') : '';

switch ($url) {
    case 'home':
    case '':
        require 'app/views/home/index.php';
        break;
    case 'form':
        require_once 'app/controllers/UserController.php';
        $controller = new UserController($db);
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $error = $controller->store();
            $users = $controller->getAllUsers();
            require 'app/views/form/index.php';
        } else {
            $users = $controller->getAllUsers();
            require 'app/views/form/index.php';
        }
        break;
    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
?>