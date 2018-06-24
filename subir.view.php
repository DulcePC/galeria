<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../galeria/css/materialize.css">
    <link rel="stylesheet" href="../../galeria/css/subir.view.css" />
</head>
<body>
    <div class="container">
        <h1>Subir Formulario</h1>
    </div>
    <div class="container">
        <div class="row">
            <form class="col l12 s12 m12 formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="row">
                    <div class="file-field input-field col l6 s12">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" name="foto">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <input id="icon_prefix" type="text" class="validate" name="titulo">
                        <label for="icon_prefix">Titulo de la foto</label>
                    </div>
                </div> 
                <div class="row">
                    <div class="input-field col l12 s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="icon_prefix2" class="materialize-textarea" name="texto"></textarea>
                        <label for="icon_prefix2">Descripcion</label>
                    </div>
                </div> 
                <?php if(isset($error)): ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php endif ?>
                <input type="submit" class="submit btn enviar right" name="submit" value="Subir Foto">
            </form>
        </div>
    </div>
    
    <!--footer-->
    <br>
    <br>
    <footer>
        <p class="center">Realizado por DulcePC</p>
    </footer>










    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="../../galeria/js/materialize.js"></script>
</body>
</html>
</html>