<?php
    require 'funciones.php';
    if(isset($_POST['submit'])){  
        if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
            // print_r($_FILES);
            $check = @getimagesize($_FILES['foto']['tmp_name']);
            if ($check !== false) {
                $carpeta_destino = 'fotos/';
                $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
                move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
        
                $sql = "INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)";
        
                $val = $db->query($sql)(array(
                    ':titulo' => $_POST['titulo'],
                    ':imagen' => $_FILES['foto']['name'],
                    ':texto' => $_POST['texto']
                ));
                
                echo "hola mundo";
                // header('Location: index.php');
            } else {
                $error = "El archivo no es una imagen o el archivo es muy pesado";
            }
        }
    }

    require 'view/subir.view.php';
?>