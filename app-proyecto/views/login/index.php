<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main_style.css">
     <!-- Fontfaces CSS-->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <title>Login</title>
</head>

<body id="login">
    <?php require_once 'views/header/index.php'; ?>
    <?php if ($this->existMessages() && $this->isSuccess() == "error") { ?>
        <div class="inner">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Ups!</h4>
                <p>Ah ocurrido un error inesperado </p>
                <hr>
                <p class="mb-0">
                <p><?php
                    $this->showMessages();
                    ?></p>
                </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php } else if ($this->existMessages() && $this->isSuccess() == "success"){ ?>

        <div class="inner">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Acción exitosa!</h4>
                <p>Se ha registrado exitosamente en nuestra plataforma. </p>
                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php  }  ?>

    <div class="login-main">

        <form action="<?php echo constant('URL') ?>/login/authenticate" method="POST">
            <div class="formulario">
                <h4 class="form-title">Inicio de sesión</h4><br>
                <input class="form-control" type="text" name="email"  placeholder=" Ingrese su Email">
                <input class="form-control" type="password" pattern=".{4,}"  name="password"  placeholder=" Ingrese su Contraseña "><br>
                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button><br>
                <p class ="p-title">
                    ¿No Tienes una cuenta? <a href="<?php echo constant('URL'); ?>/signup">Registrate</a>
                </p>
                <p>Ingresar con </p>&nbsp; <a style="margin-left:24px;"class="btn btn-light" href="<?php echo constant('URL') ?>/loginsocial/receivedDataSocialMedia"><img src="assets/images/google-logo.png"></a>&nbsp;&nbsp;
                    <a class="btn btn-primary" href="<?php echo constant('URL') ?>/loginsocial/receivedDataFacebookMedia"><img src="assets/images/facebook-logo.png"></a>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-danger" href="<?php echo constant('URL') ?>/loginsocial/receivedDataYouTubeMedia"><img src="assets/images/youtube-logo.png"></a>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-info" href="<?php echo constant('URL') ?>/loginsocial/receivedDataTwitterMedia"><img src="assets/images/twitter-logo.png"></a>
            </div>
        </form>
    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
   
</body>

</html>