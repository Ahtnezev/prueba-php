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

$taskController = new TaskController($pdo);
$tasks = $taskController->getAllTasks($_SESSION['user_id']);

require_once __DIR__ . '/../src/views/tasks_view.php';
?>
