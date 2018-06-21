<?php
//aqui la logica cuando inicie seccion
session_start();
if (isset($_SESSION['usuario'])) {
	header('Location: view/adm.view.php');
} else {
	header('Location: login.php');
}

?>