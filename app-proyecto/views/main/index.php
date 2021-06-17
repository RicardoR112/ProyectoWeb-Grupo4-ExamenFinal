<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main_style.css">

    <!-- Fontfaces CSS-->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <title>Articulos Cientificos</title>
</head>

<body >
    <?php require_once 'views/header/index.php'; ?>
    <div id="fondo">
    <?php if ($this->existMessages()) { ?>
        <div class="inner">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Informamos que:</h4>
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
    <?php } ?>

    <div id="principal">
        <h1 id="text-index">Bienvenido a la comunidad mas grande<br> para compartir articulos!</h1>
        <h4 class="index-b">Al hacer parte de nuestra plataforma, accedera<br> a todos los beneficios y facilidades <br>que esta ofrece, a que esperas!</h4>
        <a href="<?php echo constant('URL'); ?>/login" class="index-a">Empezar</a><br>
        <a href="<?php echo constant('URL'); ?>/signup" class="index-a">¿Aun no tienes una cuenta?</a>
    </div>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  
</body>

</html>