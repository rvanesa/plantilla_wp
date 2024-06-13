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
    <link rel="shortcut icon" href="img/logo.avif">
    <!-- App css -->
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>

        <?php
        include("include/menu.php");
        ?>


        <!-- ========== Left Sidebar Start ========== -->

        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                </div> <!-- container-fluid -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">¿Tienes alguna pregunta?</h5>
                                    <p class="text-muted font-13 mb-4">Envíanos un correo electrónico con tus preguntas o también nos puedes contactar por Twitter.</p>
                                    <form>
                                        <div class="form-group row">
                                            <div class="col-lg-6 mb-3 mb-lg-0">
                                                <input class="form-control" type="text" id="name" placeholder="Nombre">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="email" id="example-email-input3" placeholder="Correo Electrónico">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" id="subject2" placeholder="Asunto">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tu mensaje"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block px-4">Enviar Mensaje</button>
                                    </form>
                                </div>
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
        <script src="plantilla/admin/vertical/assets/js/jquery.min.js"></script>
        <script src="plantilla/admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
        <script src="plantilla/admin/vertical/assets/js/metismenu.min.js"></script>
        <script src="plantilla/admin/vertical/assets/js/waves.js"></script>
        <script src="plantilla/admin/vertical/assets/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src="plantilla/admin/vertical/assets/js/theme.js"></script>

</body>

</html>