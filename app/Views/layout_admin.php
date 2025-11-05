<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection('title') ?? 'Avivamiento Perú 3G | ADMIN' ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- animation css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/animate.css') ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/bootstrap.css')?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/style.css')?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/dark.css')?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/bootstrap-select.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/my_style.css?1')?>" type="text/css" media="all" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- end fontawesome -->
    <!--//swetaler2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Prerequisites datepicker-->
    <script src="<?php echo site_url() . "assets/admin/js/jquery-3.3.1.js"; ?>"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <!-- begin favico -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon/favicon-96x96.png') ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?= base_url('assets/img/favicon/favicon.svg') ?>" />
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon/favicon.ico') ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/favicon/apple-touch-icon.png') ?>" />
    <link rel="manifest" href="<?= base_url('assets/img/favicon/site.webmanifest') ?>" />
    <!-- end favicon -->
    <?= $this->renderSection('css') ?>
</head>

<body data-new-gr-c-s-check-loaded="14.1042.0" data-gr-ext-installed="">
    <!-- Header area start -->
    <nav class="pcoded-navbar navbar-collapsed" style="overflow-y:auto;overflow-x: hidden !important;">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a class="b-brand">
                    <div class="">
                        <img alt="Logo" src="<?= base_url('assets/img/logo/logo.png') ?>" width="30" />
                    </div>
                    <span class="b-title">Avivamento Perú 3G</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <?php
            $url = explode("/", uri_string());
            if (isset($url[1])) {
                $nav = $url[1];
            } else {
                $nav = "";
            }
            $panel_style = null;
            $panel_color = null;
            $mantenimientos_style = null;
            $clientes_color =  null;
            $usuarios_color = null;
            $encuestas_color = null;

            switch ($nav) {
                case "clientes":
                    $mantenimientos_style = "active pcoded-trigger";
                    $clientes_color = "active_nav";
                    break;
                case "usuarios":
                    $mantenimientos_style = "active pcoded-trigger";
                    $usuarios_color = "active_nav";
                    break;
                case "encuestas":
                    $mantenimientos_style = "active pcoded-trigger";
                    $encuestas_color = "active_nav";
                    break;
                default:
                    $panel_style = "active pcoded-trigger";
                    $panel_color = "active_nav";
                    break;
            }
            ?>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Inicio</label>
                    </li>
                    <li class="nav-item <?php echo $panel_style; ?>">
                        <a href="/dashboard" class="nav-link <?php echo $panel_color; ?>">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Panel </span>
                        </a>
                    </li>
                    <li class="nav-item pcoded-hasmenu <?php echo $mantenimientos_style; ?>">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Datos</span></a>
                        <ul class="pcoded-submenu">
                            <li>
                                <a href="/dashboard/clientes" class="<?php echo $clientes_color; ?>">Clientes</a>
                            </li>
                            <li>
                                <a href="/dashboard/encuestas" class="<?php echo $encuestas_color; ?>">Encuestas</a>
                            </li>
                            <?php
                            if ($userData['role'] == 'admin') { ?>
                                <li class=""><a href="/dashboard/usuarios" class="<?php echo $usuarios_color; ?>">Usuarios</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                    <img alt="Logo" src="<?= base_url('assets/img/logo/logo.png') ?>" width="30" />
                </div>
                <span class="b-title">Avivamiento Perú 3G</span>
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="<?php echo base_url("assets/admin/img/300-1.jpg"); ?>" class="img-radius" alt="Imagen de Perfil">
                                <span><?php echo $userData['name']; ?></span>
                                <a href="/dashboard/salir" class="dud-logout" title="Salir">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="/dashboard/salir" class="dropdown-item"><i class="feather icon-lock"></i> Salir</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <!-- End main content -->
    <!-- Footer Area Start Here  -->
    <footer>
        <div class="ms-footer-bottom">
            <div class="container">
                <div class="ms-footer-bottom-wrap text-center pt-35 pb-20">
                    <div class="ms-footer-copy">
                        <p>© <?php echo date("Y"); ?>. Todos los derechos reservados por <a href="https://evox-lab.com/" target="_blank">Evox Lab</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here  -->
    </div>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "1000"
        };
    </script>
    <!-- JS here -->
    <!-- custom js form contact -->
    <script src="<?= base_url('assets/admin/js/vendor-all.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/pcoded.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/amcharts.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/serial.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/pie.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/datatables.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/bl-datatable-custom.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/lightbox.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/inputmask.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/jquery.inputmask.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/autoNumeric.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/form-masking-custom.js') ?>"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<?= $this->renderSection('js') ?>
</body>

</html>