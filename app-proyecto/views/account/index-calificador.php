<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <title>Editando</title>

    <!-- Fontfaces CSS-->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">


</head>

<body class="animsition">

<div id="edit-calificador">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="">
                                <a href="<?php echo constant('URL') ?>/" id="ancla"><img class="navbar-brand" style="width: 100px; height: 70px;" src="assets/images/logo.png" alt="logo"></a>
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li>
                                <a class="js-arrow" href="<?php echo constant('URL') ?>/calificadordashboard">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li class="has-sub">
                                <a href="<?php echo constant('URL') ?>/accountcalificador">
                                    <i class="fas fa-table"></i>Editar mis Datos</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <a href="<?php echo constant('URL') ?>/" id="ancla"><img class="navbar-brand" style="width: 100px; height: 70px;" src="assets/images/logo.png" alt="logo"></a>
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a class="js-arrow" href="<?php echo constant('URL') ?>/calificadordashboard">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li class="active has-sub">
                                <a href="<?php echo constant('URL') ?>/accountcalificador">
                                    <i class="fas fa-table"></i>Editar mis Datos</a>
                            </li>
                        
                        </ul>
                    </nav>
                </div>
            </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Buscar Facturas &amp;/o reportes..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">Ver todos</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <?php if ($this->data['user']->getPhoto() == '') { ?>
                                                            <img  src="assets/images/profile-default.png" class="profile-img" style="width:40px; height:40px; border-radius: 50%;" alt="defaultPhoto">
                                                        <?php } else { ?>
                                                            <img  src="<?php echo $this->data['user']->getPhoto(); ?>" class="profile-img" style="width:40px; height:40px;border-radius: 50%;" alt="userPhoto">
                                                        <?php } ?>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $this->data['user']->getNombres() ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                    <?php if ($this->data['user']->getPhoto() == '') { ?>
                                                            <img  src="assets/images/profile-default.png" class="profile-img" style="width:40px; height:40px;border-radius: 50%;" alt="defaultPhoto">
                                                        <?php } else { ?>
                                                            <img  src="<?php echo $this->data['user']->getPhoto()?>" class="profile-img" style="width:40px; height:40px;border-radius: 50%;" alt="userPhoto">
                                                        <?php } ?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"> <a href="#"><?php echo $this->data['user']->getNombres() ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $this->data['user']->getEmail() ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo constant('URL') ?>/accountcalificador">
                                                        <i class="zmdi zmdi-account"></i>Mi Cuenta  [<?php if ($this->data['user']->getRole() == 0) {
                                                                                                        echo 'Administrador';
                                                                                                    } else if ($this->data['user']->getRole() == 1) {
                                                                                                        echo 'Calificador';
                                                                                                    } else if ($this->data['user']->getRole() == 2) {
                                                                                                        echo 'Estudiante';
                                                                                                    }else {
                                                                                                        echo 'Estudiante';
                                                                                                    } ?>]</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Configuraciones</a>
                                                </div>

                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo constant('URL') ?>/logout/logout">
                                                    <i class="zmdi zmdi-power"></i>Cerrar sesion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                <div class="mensaje" id="msg-succes"></div>
                    <div class="container-fluid">
                    
                        <div class="row">
                            <div class="col-md-10">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt bg-dark">
                                            <div class="media">
                                            <a id="imageFather"href="#"  data-toggle="modal" data-target="#upload-photo">
                                                    <?php if ($this->data['user']->getPhoto() == '') { ?>
                                                        <img src="assets/images/profile-default.png" class="profile-img" style="width:85px; height:85px;border-radius: 50%;" alt="defaultPhoto">
                                                    <?php } else { ?>
                                                        <img src="<?php echo $this->data['user']->getPhoto()?>" class="profile-img" style="width:85px; height:85px;border-radius: 50%;" alt="userPhoto">
                                                    <?php } ?>
                                                </a>
                                                <div class="media-body">
                                                <h2 class="text-light display-6"><?php echo  $this->data['user']->getNombres(); ?>
                                                        &nbsp;<?php
                                                                echo  $this->data['user']->getApellidos();
                                                                ?></h2>
                                                    <p class="text-light display-6"> Evaluador de <b> Articulos</b></p>
                                                </div>
                                            </div>
                                        </div>


                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="fullname" class=" form-control-label"><b><i>Nombres</i></b></label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nombres" name="nombres" value="<?php echo  $this->data['user']->getNombres(); ?>" class="form-control">
                                                    <small class="form-text text-muted">Name</small>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="username" class=" form-control-label"><b><i>Apellidos</i></b></label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="apellidos" name="apellidos" value="<?php echo  $this->data['user']->getApellidos(); ?>" class="form-control">
                                                    <small class="form-text text-muted">Last name</small>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="email" class=" form-control-label"><b><i>Correo Electronico</i></b></label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email" name="email" value="<?php echo  $this->data['user']->getEmail(); ?>" class="form-control">
                                                    <small class="form-text text-muted">E-mail</small>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="document" class=" form-control-label"><i><b>Cedula de Ciudadania</b></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text" id="documento" name="documento" value="<?php echo  $this->data['user']->getDocument(); ?>" class="form-control">
                                                    <small class="form-text text-muted">Document</small>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="tipo_documento" class=" form-control-label"><i><b>Tipo documento</i></b></label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select id="tipo_documento" name="tipo_documento" class="form-control" required>
                                    <option selected value="<?php echo  $this->data['user']->getTipoDoc(); ?>"><?php  echo  $this->data['user']->getTipoDoc(); ?></option>
                                    <option>Tarjeta Identidad (TI)</option>
                                    <option>Cedula Ciudadania (CC)</option>
                                    <option>Cedula Extranjeria (CE)</option>
                                </select>
                                                    
                                                    <small class="form-text text-muted">Document Type</small>
                                                </div>

                                            </li>
                                            <li class="list-group-item">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="fecha_nac" class=" form-control-label"><i><b>Fecha Nacimiento</b></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input class="form-control" id="fecha_nac" type="date" name="fecha_nac" value="<?php echo  $this->data['user']->getFechaNac(); ?>" min="1750-01-01" max="2030-12-31">
                                                    <small class="form-text text-muted">Date</small>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="sexo" class=" form-control-label"><i><b>Sexo</b></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <?php if($this->data['user']->getSexo()=='Masculino'){ ?>
                                                <input type="radio"  name="sexo"   value="Masculino" checked>&nbsp;<label style="color: #111B54;
text-shadow: 1px 2px 2px white;">Masculino</label>
                                &nbsp;&nbsp;
                                <input type="radio"  name="sexo"  class="p-title" value="Femenino">&nbsp;<label style="color: #111B54;
text-shadow: 1px 2px 2px white;">Femenino</label>
                                                    <small class="form-text text-muted">Sex</small>
                                                    <?php }else{ ?>

                                                        <input type="radio"  name="sexo"   value="Masculino" >&nbsp;<label style="color: #111B54;
text-shadow: 1px 2px 2px white;">Masculino</label>
                                &nbsp;&nbsp;
                                <input type="radio"  name="sexo"  class="p-title" value="Femenino" checked>&nbsp;<label style="color: #111B54;
text-shadow: 1px 2px 2px white;">Femenino</label>
                                                    <small class="form-text text-muted">Sex</small>
                                                    <?php } ?>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row form-group">
                                                    <div class="col-12 col-md-12">
                                                        <div class="card-footer">
                                                        <input type="button" class="btn btn-info btn-block" href="javascript:;" onclick="updateProfileAdmin()" value="Guardar Cambios"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="upload-photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizando Foto de Perfil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="file" id="fileToUpload" onchange="upload_image_enfermero();">
                        <b>
                            <p class="help-block">para subir</p>
                        </b>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="upload-msg"></div>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Volver</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>



</body>

</html>