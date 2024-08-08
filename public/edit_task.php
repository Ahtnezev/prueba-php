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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $taskController->editTask($taskId, $title, $description, $status);
} else {
    $taskId = $_GET['id'];
    $tasks = $taskController->getAllTasks($_SESSION['user_id']);
    $task = array_filter($tasks, function ($task) use ($taskId) {
        return $task['id'] == $taskId;
    });
    $task = reset($task);

    require_once __DIR__ . '/../src/views/edit_task_view.php';
}
?>
