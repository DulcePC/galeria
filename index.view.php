<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../galeria/css/materialize.css">
    <link rel="stylesheet" href="../../galeria/css/main.css" />
</head>
<body>
    <div class="acceder green col l12">
        <h3 class="titulo">Obras de arte de Candido bido<a href="adm.php"><i class="material-icons right">arrow_forward</i></a></h3>
    </div>
    <div class="fotos col l12 s12 m12 container">
        <div class="row">
            <?php foreach($fotos as $foto): ?>
                <div class="col l3 m3 s12">
                    <a href="foto.php?id=<?php echo $foto['id']; ?>">
                        <img src ="../../galeria/fotos/<?php echo $foto['imagen'] ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        
    </div>
      <!--botones!-->
    <div class="container green">
        <?php if ($pagina_actual > 1): ?>
            <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda left"><i class=" material-icons left">arrow_back</i>Anterior</a>
		<?php endif ?>
        <?php if ($total_paginas != $pagina_actual): ?>
			<a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha right"><i class="material-icons right">arrow_forward</i>Siguiente</a>
		<?php endif ?>
        <!-- <a href="#" class="izquierda left"><i class=" material-icons left">arrow_back</i>Anterior</a>
        <a href="#" class="derecha right"><i class="material-icons right">arrow_forward</i>Siguiente</a> -->
    </div>
  
    <br>
    <br>
    <!--footer-->
    <footer class="page-footer">
        <div class="footer-copyright"><div class="container center">© 2014 Copyright Text</div></div>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="../../galeria/js/materialize.js"></script>
</body>
</html>