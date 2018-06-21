<?php
// function conexion($galeria, $usuario, $pass){
// 	try {
// 		$conexion = new PDO("mysql:host=localhost;dbname=$galeria", $usuario, $pass);
// 		return $conexion;
// 	} catch (PDOException $e) {
// 		return false;
// 	}
//}
	$db = new Mysqli;
	$db->connect('localhost','root','','galeria');
	if(!$db){
		echo "success";
	}
?>