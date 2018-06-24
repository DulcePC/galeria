<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: view/adm.view.php');
}


require 'view/login.view.php';

?>