<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../../helpers/functions.php';

class AuthController {

	private $pdo;
	private $userModel;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
		$this->userModel = new User($pdo);	
	}

	// Generamos el usuario, en caso de error mostramos un mensaje.
	public function register($username, $password)
	{
		if ($this->userModel->create($username, $password))	{
			redirect('login.php');
		} else {
			echo "¡Whoops!, ocurrió un error al registrar usuario.";
		}
	}

	// Iniciar sesión en base al usuario y contraseña.
	public function login($username, $password)
	{
		$user = $this->userModel->getByUsername($username);
		if ($user && password_verify($password, $user['password'])) {
			session_start();
			$_SESSION['user_id'] = $user['id'];
			redirect('tasks.php');
		} else {
			echo "Usuario y/o contraseña incorrectos.";
		}
	}

	// Terminar sesión del usuario y redireccionar a página `login`.
	public function logout()
	{
		session_start();
		session_destroy();

		redirect('login.php');
	}

}