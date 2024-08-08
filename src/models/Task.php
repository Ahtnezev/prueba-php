<?php

//* Toda la lógica en modelos.
class Task {

	private $pdo;

	function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	// Obtenemos las tasks creadas por el usuario.
	public function getAllByUserId($userId)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM tasks WHERE user_id = :user_id");
		$stmt->execute(['user_id' => $userId]);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	// Generamos una nota, insertamos los valores en la tabla `tasks`.
	public function create($userId, $title, $description)
	{
		$stmt = $this->pdo->prepare("INSERT INTO tasks (user_id, title, description) VALUES (:user_id, :title, :description)");
		
		return $stmt->execute(['user_id' => $userId, 'title' =>  $title, 'description' => $description]);
	}

	// Actualizamos una nota...
    public function update($taskId, $title, $description, $status)
    {
        $stmt = $this->pdo->prepare("UPDATE tasks SET title = :title, description = :description, status = :status WHERE id = :id");
		
        return $stmt->execute(['id' => $taskId, 'title' => $title, 'description' => $description, 'status' => $status]);
    }

	/**
	 * Eliminar un Task en base al `id` que recibamos.
	 * @param taskId
	*/
	public function delete($taskId)
	{
		$stmt = $this->pdo->prepare("DELETE FROM tasks WHERE id = :id");

		return $stmt->execute(['id' => $taskId]);
	}

}