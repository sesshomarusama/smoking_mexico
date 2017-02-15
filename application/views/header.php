<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        
        <title>Smoking México | <?=$titulo?></title>
        
        <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/libraries/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/libraries/owl.carousel/assets/owl.carousel.css')?>" rel="stylesheet" type="text/css" >
        <link href="<?=base_url('assets/libraries/colorbox/example1/colorbox.css')?>" rel="stylesheet" type="text/css" >
        <link href="<?=base_url('assets/libraries/bootstrap-select/bootstrap-select.min.css')?>" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/libraries/bootstrap-fileinput/fileinput.min.css')?>" rel="stylesheet" type="text/css">
        <link href="<?=base_url('assets/css/superlist.css')?>" rel="stylesheet" type="text/css" >
        <link href="<?=base_url('assets/css/loaders.css')?>" rel="stylesheet" type="text/css" >
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/favicon.png')?>">

        <?php
            if (isset($css) && !empty($css)):
                foreach ($css as $ruta_css):
                    echo '<link href="'.base_url($ruta_css).'" rel="stylesheet">'."\n";
                endforeach;
            endif;
        ?>
    </head>

    <body class="">
        <div class="page-wrapper">
            <!-- loading para cada solicitud de página -->
            <div class="clase_cargando"></div>
            <div class="spinner_cat" style=" background:transparent url(<?= base_url('assets/img/animal.gif')?>) center no-repeat;"></div>
            
            <header class="header">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="header-inner">
                            <div class="header-logo">
                                <a href="<?=base_url()?>">
                                    <img src="<?=base_url('assets/img/logo.png')?>" alt="Logo">
                                    <span>Smoking México</span>
                                </a>
                            </div><!-- /.header-logo -->

                            <div class="header-content">
                                <div class="header-top">
                                    <div class="header-search">
                                        <input type="text" class="form-control" placeholder="Buscar por empresa">
                                    </div><!-- /.header-search -->

                                    <ul class="header-nav-social social-links nav nav-pills">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul><!-- /.header-nav-social -->

                                    <ul class="header-nav-secondary nav nav-pills">
                                        <li><a href="<?=base_url('iniciar-sesion')?>">Iniciar Sesión</a></li>
                                        <li><a href="<?=base_url('crear-cuenta')?>">Registrar</a></li>
                                    </ul>
                                </div><!-- /.header-top -->

                                <div class="header-bottom">
                                    <div class="header-action">
                                        <a href="<?=base_url('iniciar-sesion')?>" class="header-action-inner" title="Iniciar Sesión" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-user"></i>
                                        </a><!-- /.header-action-inner -->
                                    </div><!-- /.header-action -->

                                    <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                                        <li >
                                            <a href="<?=base_url()?>">Inicio</a>
                                        </li>

                                        <li >
                                            <a href="#">Listing <i class="fa fa-chevron-down"></i></a>

                                            <ul class="sub-menu">
                                                <li><a href="listing-detail.html">Detail</a></li>
                                                <li><a href="listing-map.html">Row + Map</a></li>
                                                <li><a href="listing-grid.html">Grid</a></li>
                                                <li><a href="listing-grid-sidebar.html">Grid Sidebar</a></li>
                                                <li><a href="listing-row.html">Row</a></li>
                                                <li><a href="listing-row-sidebar.html">Row Sidebar</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-mega-menu active">
                                            <a href="#">Pages <i class="fa fa-chevron-down"></i></a>

                                            <ul class="mega-menu">
                                                <li>
                                                    <a href="#">General</a>

                                                    <ul>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                        <li><a href="invoice.html">Invoice</a></li>
                                                        <li><a href="pricing.html">Pricing</a></li>
                                                        <li><a href="grid.html">Grid System</a></li>
                                                        <li><a href="testimonials.html">Testimonials</a></li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="#">User Account</a>

                                                    <ul>
                                                        <li><a href="user-profile-edit.html">Profile Edit</a></li>
                                                        <li><a href="login.html">Login Form</a></li>
                                                        <li><a href="register.html">Register Form</a></li>
                                                        <li><a href="change-password.html">Change Password Form</a></li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="#">Miscellaneous</a>

                                                    <ul>
                                                        <li><a href="sticky-footer.html">Sticky Footer</a></li>
                                                        <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                                                        <li><a href="error-403.html">403 - Forbidden</a></li>
                                                        <li><a href="error-404.html">404 - Not Found</a></li>
                                                        <li><a href="error-500.html">500 - Internal Error</a></li>
                                                    </ul>
                                                </li>

                                                <li class="hidden-xs">
                                                    <div class="special">
                                                        <a href="register.html">Sign Up Now</a>
                                                    </div><!-- /.special-->
                                                </li>
                                            </ul>
                                        </li>

                                        <li >
                                            <a href="#">Blog <i class="fa fa-chevron-down"></i></a>

                                            <ul class="sub-menu">
                                                <li><a href="blog-standard-right-sidebar.html">Standard Right Sidebar</a></li>
                                                <li><a href="blog-standard-left-sidebar.html">Standard Left Sidebar</a></li>
                                                <li><a href="blog-boxed.html">Boxed Style</a></li>
                                                <li><a href="blog-condensed.html">Condensed Style</a></li>
                                                <li><a href="blog-detail.html">Detail Fullwidth</a></li>
                                                <li><a href="blog-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                                <li><a href="blog-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                            </ul>
                                        </li>

                                        <li >
                                            <a href="#">Admin <i class="fa fa-chevron-down"></i></a>

                                            <ul class="sub-menu">
                                                <li><a href="admin-dashboard.html">Dashboard</a></li>
                                                <li><a href="admin-grid.html">Grid System</a></li>
                                                <li><a href="admin-tables.html">Tables</a></li>
                                                <li><a href="admin-forms.html">Forms</a></li>
                                                <li><a href="admin-notifications.html">Notifications</a></li>
                                            </ul>
                                        </li>

                                        <li >
                                            <a href="#">Contact <i class="fa fa-chevron-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="contact-1.html">Contact v1</a></li>
                                                <li><a href="contact-2.html">Contact v2</a></li>
                                                <li><a href="contact-3.html">Contact v3</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div><!-- /.header-bottom -->
                            </div><!-- /.header-content -->
                        </div><!-- /.header-inner -->
                    </div><!-- /.container -->
                </div><!-- /.header-wrapper -->
            </header><!-- /.header -->