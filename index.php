<?php
$url = isset($_GET['url']) ? $_GET['url'] : '';

if ($url === 'users' || $url === 'users/') {
    require 'app/views/users/index.php';
    exit;
}

// ...otras rutas o lógica...
?>