<?php

require_once __DIR__ . '/../src/controllers/AuthController.php';
require_once __DIR__ . '/../helpers/functions.php';

$authController = new AuthController(null);
$authController->logout();
?>
