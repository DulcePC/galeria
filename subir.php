<?php
    require 'funciones.php';
    $conexion = conexion('galeria','root','');
    if(!$conexion){
        die();
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
        $check = @getimagesize($_FILES['foto']['tmp_name']);
        //print_r($_FILES);
        if($check !== false){
            $carpeta_destino = 'fotos/';
            $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'],$archivo_subido);
           
            $statement = $conexion->prepare('
            insert into fotos(titulo,imagen,texto)
            values (:titulo, :imagen ,:texto) 
            ');
            // var_dump($_POST['titulo']);
            // var_dump($_POST['texto']);
            $statement->execute(array(
                ':titulo' => $_POST['titulo'],
                ':imagen' => $_FILES['foto']['name'],
                ':texto'  => $_POST['texto']
            ));
            header('location:index.php');
        }else{
            $error ="el archivo no es una imagen o el archivo es muy pesado";
        }
    }

require 'view/subir.view.php';
?>