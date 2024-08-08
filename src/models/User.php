<?php

//* Toda la lógica en modelos.
class User {

	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	/**
	 * Registrarmos al usuario con su usuario y su contraseña ya con hash.
	 * @param username
	 * @param password
	*/
	public function create(string $username, string $password)
	{
		$passwordHash = password_hash($password, PASSWORD_BCRYPT);
		$stmt = $this->pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
		
		return $stmt->execute(['username' => $username, 'password' => $passwordHash]);
	}

	/**
	 * Obtenemos el usuario según su username.
	 * @param username
	*/
	public function getByUsername($username)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
		$stmt->execute(['username' => $username]);
		
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

}