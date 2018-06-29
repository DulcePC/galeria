<!DOCTYPE html>
<?php 
    session_start();
    include '../../galeria/db.php';
    $sql ="select * from fotos";
    $rows = $db ->query($sql);

    //paginacion
    require '../../galeria/funciones.php';
    $conexion = conexion ('galeria', 'root','');
    if(!$conexion){
        die();
    }
    //paginacion para nuestro adm
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $postPorPagina = 5; //cuanto post queremos mostrar por pagina

    // para saber desde donde vamos a traer los articulos, $inicio va a atraer desde el post numero 5, 5 articulos
    $inicio = ($pagina > 1 ) ? ($pagina * $postPorPagina - $postPorPagina) : 0;
    //que nos traiga todos los articulos de la tabla con un limite porque si no estariamos trayendo todos, 
    $articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM  fotos LIMIT $inicio,$postPorPagina");
    $articulos->execute();
    $articulos = $articulos->fetchAll();
    //print_r($articulos); //(para ver si estan llegando los valores de la base de datos )
    if(!$articulos){
        header('location:../../galeria/view/adm.view.php');
    }
    $totalArticulos = $conexion->query("select FOUND_ROWS() as total");
    $totalArticulos = $totalArticulos->fetch()['total'];
    //echo $totalArticulos; //(nos traera el total de articylos que tenemos en la base de datos)
    $numeroPaginas = ceil($totalArticulos / $postPorPagina);// se le pone ceil para redondear hacia arriba si es que hay decimales  el numero de paginas es igual a todos los articulos de la base de das ppor los porst que queremos mostrar en la pagna
    //echo $numeroPaginas; //(para saber el numero de paginas que tenemos (osea dependiendo los articulos))


?>
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
    <ul id="slide-out" class="side-nav blue lighten-2">
        <li>
            <div class="user-view col l12">
                <div class="background black prueba">
                    <div class="row">
                        <div class="col l4 margin">
                            <a href="#!user"><img class="circle" src="../../galeria/fotos/2.jpg"></a>
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
        <li><a href="../../galeria/index.php"><i class="material-icons">photo_album</i>Gallery</a></li>
        <li><a href="../../galeria/subir.php"><i class="material-icons">add_circle_outline</i>Agregar Foto</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader"><i class="material-icons">build</i>Ajustes</a></li>
        <li><a class="waves-effect" href="../../galeria/registrate.php"><i class="material-icons">add_circle_outline</i>Agregar Usuarios</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse show-on-medium-and-up"><i class="material-icons">menu</i></a>
    <a href="../../galeria/cerrar.php" class="right cerrar">Cerrar seccion</a>
</nav>
<br>
<br>
<div class="container">
    <table class="z-depth-2 lighten-4 centered col l12 m12 s12 responsive-table">
        <thead class="teal">
            <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>foto</th>
            <th>Texto</th>
            </tr>
        </thead>
        <tbody class="blue lighten-2">
            <tr>
            <?php foreach ($articulos as $articulo): ?>
                <th><li><?php echo $articulo['id'] ?></li></th>
                <td><li><?php echo $articulo['titulo'] ?></li></td>
                <td><li><?php echo $articulo['imagen'] ?></li></th>
                <td><li><?php echo $articulo['texto'] ?></li></td>
                <!-- <td><a href="<?php echo $articulo[ 'id'];?>" class="green btn col s3 ">Ver</a></td> -->
                <!-- <td><a href="../../galeria/editar.php?id=<?php echo $articulo['id'];?>" class="yellow btn col s3">Editar</a></td> -->
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<ul class="pagination center">
        <?php if($pagina == 1): ?><!--esto es para deshabilitar el boton si tenemos una sola pagina-->
            <li class='disabled'><a href='#!'><i class='material-icons'>chevron_left</i></a></li>
        <?php else: ?>
            <li><a href="?pagina=<?php echo $pagina -1 ?>"><i class="material-icons">chevron_left</i></a></li>
        <?php endif; ?>
        <?php
            //ejecutamos el ciclo para mostra las paginas
            for($i=1; $i <=$numeroPaginas; $i++){
                if($pagina == $i){
                    echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                }else{
                    echo "<li class='waves-effect'><a href='?pagina=$i'>$i</a></li>";
                }
            } //creando una pagina por cada una de ellas
        ?>
        <?php 
        //establecemos que nuestro boton de siguiente se habilite
        if($pagina == $numeroPaginas): ?><!--esto es para deshabilitar el boton si tenemos una sola pagina-->
            <li class='disabled'><a href='#!'><i class='material-icons'>chevron_right</i></a></li>
        <?php else: ?>
            <li><a href="?pagina=<?php echo $pagina + 1 ?>"><i class="material-icons">chevron_right</i></a></li>
        <?php endif; ?>
</ul>





<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="../../galeria/js/javascript.js"></script>
</body>
</html>