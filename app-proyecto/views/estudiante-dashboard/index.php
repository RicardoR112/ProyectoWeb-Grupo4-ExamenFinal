<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main_style.css">
    <title>Your home page</title>

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
 


  <div id="estudiante">
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
                            <li class="has-sub">
                                <a class="js-arrow" href="<?php echo constant('URL') ?>/pacientedashboard">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                           
                            <li>
                                <a href="<?php echo constant('URL') ?>/accountestudiante">
                                    <i class="fas fa-table"></i>Editar mis Datos</a>
                            </li>
                            <li>
                                <a href="<?php echo constant('URL') ?>/addarticle">
                                <i class="zmdi zmdi-attachment-alt"></i>Agregar Articulo</a>
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
                            <li class="active has-sub">
                                <a class="js-arrow" href="<?php echo constant('URL') ?>/pacientedashboard">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                          
                            <li>
                                <a href="<?php echo constant('URL') ?>/accountestudiante">
                                    <i class="fas fa-table"></i>Editar mis Datos</a>
                            </li>

                            <li>
                                <a href="<?php echo constant('URL') ?>/addarticle">
                                <i class="zmdi zmdi-attachment-alt"></i>Agregar Articulo</a>
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
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Buscar usuarios" />
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
                                                <p>Tienes 1 mensaje nuevo </p>
                                            </div>
                                       
                                            
                                                    <div class="mess__item">
                                                        <div class="image img-cir img-40">
                                                        <img src="assets/images/profile-default.png">
                                                        </div>
                                                        <div class="content">
                                                         
                                                            <h6>Diego</h6>
                                                            <p>Necesito tu ayuda</p>
                                                            <span><time class="timeago" datetime="2021-04-28 16:26:28"></time></span>
                                                        </div>
                                                    </div>

                                            <div class="mess__footer">
                                                <a href="<?php echo constant('URL') ?>/messages">Ver todos</a>
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
                                                    <span class="date">Mayo 12, 2021 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">Mayo 12, 2021 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">Mayo 12, 2021 06:50</span>
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
                                                <img src="assets/images/profile-default.png" class="align-self-center rounded-circle mr-3" style="width:40px; height:40px;" alt="defaultPhoto">
                                            <?php } else { ?>
                                                <img src="<?php echo $this->data['user']->getPhoto(); ?>" class="align-self-center rounded-circle mr-3" style="width:40px; height:40px;" alt="userPhoto">
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
                                                            <img src="assets/images/profile-default.png" class="align-self-center rounded-circle mr-3" style="width:40px; height:40px;" alt="defaultPhoto">
                                                        <?php } else { ?>
                                                            <img src="<?php echo $this->data['user']->getPhoto(); ?>" class="align-self-center rounded-circle mr-3" style="width:40px; height:40px;" alt="userPhoto">
                                                        <?php } ?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $this->data['user']->getNombres() ?></a>
                                                      
                                                    </h5>
                                                    <span class="email"><?php echo $this->data['user']->getEmail() ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo constant('URL') ?>/accountestudiante">
                                                        <i class="zmdi zmdi-account"></i>Mi Cuenta [<?php if ($this->data['user']->getRole() == 0) {
                                                                                                        echo 'Administrador';
                                                                                                    } else if ($this->data['user']->getRole() == 1) {
                                                                                                        echo 'Calificador';
                                                                                                    } else {
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
                    <div class="container-fluid">
                        <?php if ($this->existMessages()) { ?>
                            
                                <div class="inner">
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <h4 class="alert-heading">Bienvenido a la Plataforma!</h4>
                                        <p><?php
                                            
                                            $this->showMessages();
                                            echo " ", $this->data['user']->getNombres();
                                            ?></p>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            
                        <?php }

                        ?>
                          <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Sus articulos</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-4">

                            <table class="table table-responsive table-hover table-bordered p-4" id="datatable" style="background-color: whitesmoke;">
                                    <thead style="background-color:  #1F2F86;color: white; font-weight: bold;">
                                        <tr>

                                            <td>Titulo</td>
                                            <td>Autor</td>
                                            
                                            <td>Resumen</td>
                                            <td>Fecha de Publicacion</td>
                                            <td>Revision</td>
                                            <td>Calificacion</td>
                                        </tr>
                                    </thead>
                                    <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
                                        <tr>
                                           
                                           <td>Titulo</td>
                                            <td>Autor</td>
                                        
                                            <td>Resumen</td>
                                            <td>Fecha de Publicacion</td>
                                            <td>Revision</td>
                                            <td>Calificacion</td>
                                        </tr>
                                    </tfoot>
                                    <?php
                                    //saco el numero de elementos
                                    $articulos = array();
                                    $articulos = $this->data['articulos'];

                                    ?>


                                    <tbody>
                                        <?php foreach ($articulos as $clave => $valor) { ?>
                                            <tr>
                                            
                                                <td><?php echo $valor->getTitulo(); ?></td>
                                                <td><?php echo $valor->getAutor(); ?></td>
                                                <td><?php echo $valor->getResumen(); ?></td>
                                                <td><time class="timeago" datetime="<?php echo $valor->getFecha(); ?>"></time></td>
                                                <td><?php echo $valor->getRevision(); ?></td>
                                                <td><?php echo $valor->getCalificacion(); ?></td>
                                                
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
    <script src="assets/js/jquery-timeago.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $("time.timeago").timeago();
        });
    </script>

<script src="assets/datatable/jquery.dataTables.min.js"></script>
    <script src="assets/datatable/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ entradas totales)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "lengthMenu": [
                    [3, 6, 10, -1],
                    [3, 6, 10, "All"]
                ]
            });
        });
    </script>





</body>

</html>