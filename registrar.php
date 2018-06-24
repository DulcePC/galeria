<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: view/login.php');
}


require 'view/registrar.view.php';

?>