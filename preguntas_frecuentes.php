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
                <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bold text-uppercase">General</h5>
                        <div id="accordion">
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                    <h5 class="m-0 font-size-16">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne" class="text-dark">
                                            P. ¿Cuáles son las opciones de pago disponibles?
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show"
                                        aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body text-muted pt-1">
                                    Aceptamos pagos con tarjeta de crédito, transferencia bancaria y PayPal.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingTwo">
                                    <h5 class="m-0 font-size-16">
                                        <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            P. ¿Cuál es el tiempo de envío de los productos?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body text-muted pt-1">
                                    El tiempo de envío varía según la ubicación del cliente y el método de envío seleccionado, pero generalmente oscila entre 3 y 7 días hábiles.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingThree">
                                    <h5 class="m-0 font-size-16">
                                        <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            P. ¿Puedo devolver un producto si no estoy satisfecho?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body text-muted pt-1">
                                    Sí, aceptamos devoluciones dentro de los 30 días posteriores a la compra. El producto debe estar en condiciones originales y sin usar.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3 font-weight-bold text-uppercase">Pagos y Soporte</h5>
                        <div id="accordion2">
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingFour">
                                    <h5 class="m-0 font-size-16">
                                        <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            P. ¿Cómo puedo contactar al servicio de atención al cliente si tengo algún problema con mi pedido?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion2">
                                    <div class="card-body text-muted pt-1">
                                    Puedes ponerte en contacto con nuestro equipo de 
                                    atención al cliente a través de nuestro formulario
                                     de contacto en línea, por correo electrónico o 
                                     mediante nuestras redes sociales. Estamos disponibles
                                      para ayudarte de lunes a viernes de 9:00 a 18:00 horas.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" role="tab" id="headingFive">
                                    <h5 class="m-0 font-size-16">
                                        <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            P. ¿Ofrecen garantía en sus productos?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                                    <div class="card-body text-muted pt-1">
                                    Sí, todos nuestros productos están respaldados por una garantía
                                     de [insertar duración de la garantía] a partir de la fecha de 
                                     compra. Esta garantía cubre cualquier defecto de fabricación o
                                      mal funcionamiento. Por favor, consulta nuestros términos y 
                                      condiciones para obtener más detalles sobre nuestra política 
                                      de garantía.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div class="card-header bg-white border-bottom-0 p-3" role="tab" id="headingSix">
                                    <h5 class="m-0 font-size-16">
                                        <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            P. ¿Qué debo hacer si mi producto llega dañado o no funciona correctamente?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                    <div class="card-body text-muted pt-1">
                                    Lamentamos cualquier inconveniente. Por favor, ponte en contacto 
                                    con nuestro equipo de atención al cliente lo antes posible y 
                                    proporciona detalles sobre el problema. Nos comprometemos a
                                     resolver cualquier problema relacionado con la calidad de 
                                     nuestros productos de manera rápida y eficiente.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            
        
    
        <!-- end page title -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

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
        <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

    </body>


</html>