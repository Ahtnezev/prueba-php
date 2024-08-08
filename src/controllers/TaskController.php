<?php

require_once __DIR__ . '/../models/Task.php';
require_once __DIR__ . '/../../helpers/functions.php';

class TaskController {

	private $pdo;
	private $taskModel;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->taskModel = new Task($pdo);
    }

    // Retornamos tasks del usuario loggeado.
    public function getAllTasks($userId)
    {
        return $this->taskModel->getAllByUserId($userId);
    }

    // Creamos Task
    public function addTask($userId, $title, $description)
    {
        if ($this->taskModel->create($userId, $title, $description)) {
            redirect('tasks.php');
        } else {
            echo "Error al agregar Task :(.";
        }
    }

    // Actualizamos Task
    public function editTask($taskId, $title, $description, $status)
    {
        if ($this->taskModel->update($taskId, $title, $description, $status)) {
            redirect('tasks.php');
        } else {
            echo "Error al actualizar Task :(.";
        }
    }

    // Eliminamos un Task en base al id que recibamos.
    public function deleteTask($taskId)
    {
        if ($this->taskModel->delete($taskId)) {
            redirect('tasks.php');
        } else {
            echo "Error al eliminar Task :(.";
        }
    }

}