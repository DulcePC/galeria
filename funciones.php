<?php
function conexion($bd, $usuario, $pass){
	try {
		$conexion = new PDO("mysql:host=localhost;dbname=$bd", $usuario, $pass);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}
	// $db = new Mysqli;
	// $db->connect('localhost','root','','galeria');
	// if(!$db){
	// 	echo "success";
	// }
?>