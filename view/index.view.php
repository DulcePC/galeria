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
    <header class="acceder col l12">
        <h1 class="titulo">Obras de arte de Candido Bido</h1>
        <p class="descripcion">was a Dominican painter and fine artist, He was the first painter from the Dominican Republic to have an exhibition in France.</p>
    </header>
        <a href="adm.php"><i class="material-icons right">arrow_forward</i></a>
        <h3 class="obras">Obras</h3>
    <div class="fotos col l12 s12 m6 container">
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
    <div class="container">
        <?php if ($pagina_actual > 1): ?>
            <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda left"><i class=" material-icons left">arrow_back</i>Anterior</a>
		<?php endif ?>
        <?php if ($total_paginas != $pagina_actual): ?>
			<a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha right"><i class="material-icons right">arrow_forward</i>Siguiente</a>
		<?php endif ?>
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