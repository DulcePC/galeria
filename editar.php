<?php
include 'db.php';

$id = $_GET['id'];
$sql ="select * from fotos where id='$id'";
$rows = $db ->query($sql);
$row = $rows->fetch_assoc();
if(isset($_POST['submit'])){
    $foto = $_FILES['foto'];
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
   $sql2 ="update fotos set imagen='$foto',titulo='$tiltulo',texto='$texto' where id='$id'";
   $db->query($sql2);
    header('location: index.php');
}

?>