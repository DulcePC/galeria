<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../galeria/css/materialize.css">
    <link rel="stylesheet" href="../../galeria/css/foto.view.css" />
</head>
<body>
    <div class="container">
        <h1>Foto: <?php if (!empty($foto['titulo'])) {
				echo $foto['titulo'];
			} else {
				echo $foto['imagen'];
			} ?></h1>
    </div>
    <div class="container">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
			<p class="texto"><?php echo $foto['texto']; ?></p>
        </div>
        <a href="index.php" class="regresar center">Regresar</a>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="./../galeria/js/materialize.js"></script>
</body>
</html>
</html>