
-- Creamos base de datos.
CREATE DATABASE prueba_tecnica_php;
-- Hacemos uso de la misma.
USE prueba_tecnica_php;

-- Creamos tabla usuarios con sus respectivos campos (básicos), usuario, contraseña.
CREATE TABLE
	users (
		id INT AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(50) NOT NULL UNIQUE,
		password VARCHAR(255) NOT NULL
	);

-- Creamos tabla de tareas con su llave foránea hacia el usuario.
CREATE TABLE
	tasks (
		id INT AUTO_INCREMENT PRIMARY KEY,
		user_id INT NOT NULL,
		title VARCHAR(255) NOT NULL,
		description TEXT,
		status ENUM ('pendiente', 'en progreso', 'completada') DEFAULT 'pendiente',
		FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
	);