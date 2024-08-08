<?php

// Helper para poder conectarnos a la base de datos.
function connectDb($config)
{
	try {
		return new PDO(
			"mysql:host={$config['db']['host']};dbname={$config['db']['dbname']}",
			$config['db']['user'],
			$config['db']['password']
		);
	} catch (PDOException $e) {
		die('Falló al tratar de conectarse a la base de datos: ' . $e->getMessage());
	}
}

// Obtenemos id de usuario en caso contrario retornamos `null`.
function getAuthUserId()
{
	session_start();
	return $_SESSION['user_id'] ?? null;
}

/**
 * () => nos redirige a una url especifíca según en el argumento.
 * @param url
*/
function redirect($url)
{
	header("Location: $url");
	exit;
}