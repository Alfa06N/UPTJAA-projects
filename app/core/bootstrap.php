<?php
require_once __DIR__ . '/Router.php';

$router = new Router();

// Define routes
$router->addRoute('users', 'UserController', 'index');

// Dispatch the request
$router->dispatch();