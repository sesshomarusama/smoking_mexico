<!doctype html>
<html lang="en">

    <!-- Mirrored from demos.creative-tim.com/material-dashboard/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2017 22:29:07 GMT -->
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Material Dashboard by Creative Tim | Free Material Bootstrap Admin</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="<?= base_url('assetsadmin/css/bootstrap.min.css') ?>" rel="stylesheet" />

        <!--  Material Dashboard CSS    -->
        <link href="<?= base_url('assetsadmin/css/material-dashboard.css') ?>" rel="stylesheet"/>

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="<?= base_url('assetsadmin/css/demo.css') ?>" rel="stylesheet" />

        <!--     Fonts and icons     -->
        <link href="<?= base_url('assetsadmin/css/font-awesome.min.css') ?>" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    </head>

    <body>

        <div class="wrapper">

            <div class="sidebar" data-color="red" data-image="<?= base_url('assetsadmin/img/sidebar-1.jpg') ?>">
                <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
                -->

                <div class="logo">
                    <a href="http://www.creative-tim.com/" class="simple-text">
                        Smoking México
                    </a>
                </div>

                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="active">
                            <a href="<?=base_url('mi-perfil')?>">
                                <i class="material-icons">home</i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url('mi-perfil/datos')?>">
                                <i class="material-icons">person</i>
                                <p>Datos personales</p>
                            </a>
                        </li>
                        <li>
                            <a href="notifications.html">
                                <i class="material-icons text-gray">cloud_queue</i>
                                <p>Mi perfil</p>
                            </a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="material-icons">content_paste</i>
                                <p>Publicar</p>
                            </a>
                        </li>
                        <li>
                            <a href="typography.html">
                                <i class="material-icons">library_books</i>
                                <p>Mis publicaciones</p>
                            </a>
                        </li>
                        <li>
                            <a href="maps.html">
                                <i class="material-icons">location_on</i>
                                <p>Mi ubicación</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="upgrade.html">
                                <i class="material-icons">attach_money</i>
                                <p>Hacer una donación</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <nav class="navbar navbar-transparent navbar-absolute">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand"><?=$this->session->userdata('nombre')?></a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">dashboard</i>
                                        <p class="hidden-lg hidden-md">Dashboard</p>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">notifications</i>
                                        <span class="notification">5</span>
                                        <p class="hidden-lg hidden-md">Notifications</p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Mike John responded to your email</a></li>
                                        <li><a href="#">You have 5 new tasks</a></li>
                                        <li><a href="#">You're now friend with Andrew</a></li>
                                        <li><a href="#">Another Notification</a></li>
                                        <li><a href="#">Another One</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">person</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Mike John responded to your email</a></li>
                                        <li><a href="#">You have 5 new tasks</a></li>
                                        <li><a href="<?=base_url('usuario/cerrarSesion')?>">Cerrar Sesión</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group  is-empty">
                                    <input type="text" class="form-control" placeholder="Buscar">
                                    <span class="material-input"></span>
                                </div>
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i><div class="ripple-container"></div>
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>