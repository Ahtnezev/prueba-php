<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../src/controllers/TaskController.php';
require_once __DIR__ . '/../helpers/functions.php';

// En caso de que no recibamos el user_id retornamos al usuario a la página de login.
session_start();
if (!isset($_SESSION['user_id'])) {
    redirect('login.php');
}

$config = require __DIR__ . '/../config/config.php';
$pdo = connectDb($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $taskController = new TaskController($pdo);
    $taskController->addTask($_SESSION['user_id'], $title, $description);
}

require_once __DIR__ . '/../src/views/add_task_view.php';
?>
