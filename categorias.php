<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Tiendas Virtual</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/logo.avif">
    <!-- App css -->
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>

        <?php
        bloginfo('template_url');
        ?>
        <?php
        include("include/menu.php");

        ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">categorias</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">categorias</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Start nuestros autos section -->
                    <div class="row">
                        <div class="col-">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <div class="container-fluid row">
                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/img/ropas1.jpg">
                                                <div class="card-body">
                                                    <h5 class="card-tible">Titulo</h5>
                                                    <p>Encuentra la mejor moda para ti.</p>
                                                    <a href="#">Ver más</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Page-content -->

                    <?php
                    include("include/pie_pagina.php");

                    ?>


                </div>
                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->

            <!-- Overlay-->
            <div class="menu-overlay"></div>


            <!-- jQuery  -->
            <script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/waves.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

            <!-- App js -->
            <script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>


</html>