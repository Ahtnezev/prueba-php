<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../src/controllers/AuthController.php';
require_once __DIR__ . '/../helpers/functions.php';

// En caso de que no recibamos el user_id retornamos al usuario a la página de login.
session_start();
if (isset($_SESSION['user_id'])) {
    redirect('tasks.php');
}

$config = require __DIR__ . '/../config/config.php';
$pdo = connectDb($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $authController = new AuthController($pdo);
    $authController->register($username, $password);
}

require_once __DIR__ . '/../src/views/register_view.php';
?>
