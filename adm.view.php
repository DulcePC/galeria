<?php 
    session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="../../galeria/css/adm.view.css" />
</head>
<body>
<nav>
    <ul id="slide-out" class="side-nav pink">
        <li><div class="user-view col l12">
                <div class="background orange prueba">
                    <div class="row">
                        <div class="col l4 margin">
                            <a href="#!user"><img class="circle" src="../../galeria/fotos/1.jpg"></a>
                        </div>
                        <div class="col l8">
                            <p>Bienvenido, <?php echo $_SESSION['usuario'];?><p>
                            <div class="row nomargin">
                                    <div class="col l3">
                                        <i class="tiny material-icons">email</i>
                                    </div>
                                    <div class="col l3">
                                        <i class="tiny material-icons">account_circle</i>
                                    </div>
                                    <div class="col l3">
                                        <i class="tiny material-icons">edit</i>
                                    </div> 
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
        <br>
        <br>
        </li>
    
        <li><a href="#!"><i class="material-icons">add_circle_outline</i>Agregar Foto</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader"><i class="material-icons">build</i>Ajustes</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">add_circle_outline</i>Agregar Usuarios</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse show-on-medium-and-up"><i class="material-icons">menu</i></a>
    <a href="../../galeria/cerrar.php" class="right cerrar">Cerrar seccion</a>
</nav>













<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="../../galeria/js/javascript.js"></script>
</body>
</html>