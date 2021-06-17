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
    <title>SignUp</title>
</head>

<body id="signup-main">
    <?php require_once 'views/header/index.php'; ?>
    <?php $this->showMessages(); ?>

    <form action="<?php echo constant('URL') ?>/signup/newUser" method="POST">
        <div class="formulario">
            <h4 class="form-title">Registrarse</h4>
            <input type="text" name="email" placeholder="Correo electronico" class="form-control" required>
            <input type="text" name="nombres" placeholder="Nombres" class="form-control" required>
            <input type="text" name="apellidos" placeholder="Apellidos" class="form-control" required>
            <input type="text" name="documento" placeholder="N° Documento" class="form-control" required>
                                    <select name="tipo_documento" class="form-control" required>
                                        <option selected value="">Tipo</option>
                                        <option>Tarjeta Identidad (TI)</option>
                                        <option>Cedula Ciudadania (CC)</option>
                                        <option>Cedula Extranjeria (CE)</option>
                                    </select>
                                    <label class="p-title" for="fecha_nac">Fecha Nacimiento</label><br>
                                    <input class="form-control" type="date" name="fecha_nac" value="1990-12-24" min="1750-01-01" max="2030-12-31">
           
            <input class=" form-control " type="password" pattern=".{4,}" name="password" id="password" placeholder=" Contraseña ">
            <label for="sexo" class="p-title">Genero</label><br>
                                    <input type="radio" name="sexo"   value="Masculino">&nbsp;<label style="color: #111B54;
  text-shadow: 1px 2px 2px white;">Masculino</label>
                                    &nbsp;&nbsp;
                                    <input type="radio" name="sexo"  class="p-title" value="Femenino">&nbsp;<label style="color: #111B54;
  text-shadow: 1px 2px 2px white;">Femenino</label>
                                    <br><br>
            <button type="submit" class="btn btn-primary btn-block">Registrarse</button><br>
            <p class="p-title">
                ¿Ya Tienes una cuenta? <a href="<?php echo constant('URL'); ?>/login">Inicia Sesion</a>

            </p>
        </div>
    </form>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="../datatable/jquery.dataTables.min.js"></script>
    <script src="../datatable/dataTables.bootstrap4.min.js"></script>
</body>

</html>