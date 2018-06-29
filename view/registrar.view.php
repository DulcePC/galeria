<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../galeria/css/materialize.css">
    <link rel="stylesheet" href="../../galeria/css/registrar.view.css" />
</head>
<body>
    <div class="container center">
        <div class="registro">
            <div><h3 class="tituloInicio">Registrar Administrador</h3></div>
            <div class="container">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario col l12 s12 m12" name="login">
                    <div class="row">
                        <div class="input-field col l12 s12 ">
                            <i class="material-icons prefix icon1">account_circle</i>
                            <input id="icon_prefix" type="text" name="usuario" class="usuario">
                            <label for="icon_prefix">Usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col l12 s12">
                            <i class="material-icons prefix icon2">remove_red_eye</i>
                            <input id="icon_prefix" type="password" name="password" class="password">
                            <label for="icon_prefix">Contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col l12 s12">
                            <i class="material-icons prefix icon2">remove_red_eye</i>
                            <input id="icon_prefix" type="password" name="password2">
                            <label for="icon_prefix">Confirmar Contrasena</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col l12 m6 s6">
                            <a class="btn col l12">
                               <p> Enviar datos<i class="material-icons prefix left" onclick="login.submit()">send</i><p>
                            </a>
                        </div>
                    </div>
                    <?php if(!empty($errores)): ?>
                        <div class="error">
                            <ul>
                                <?php echo $errores; ?>
                            </ul>
                        </div>
			        <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
    <!--footer-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="page-footer">
        <div class="footer-copyright"><div class="container center">© 2014 Copyright Text</div></div>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="../../galeria/js/materialize.js"></script>
</body>
</html>