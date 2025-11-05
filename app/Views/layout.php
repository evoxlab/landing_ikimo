<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $this->renderSection('title') ?? 'Avivamiento Perú 3G' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Únete a nosotros del 11 al 14 de diciembre para una experiencia espiritual inolvidable llena de adoración, enseñanza y comunión. ¡Regístrate Gratis!">
    <meta name="author" content="Evox Lab">
    <meta name="robots" content="Index, Follow">
    <!-- begin facebook -->
    <meta property="og:site_name" content="Avivamiento Perú 3G" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:title" content="Mega Evento Evangelístico en Pichari - Vraem | del 11 al 14 DIC" />
    <meta property="og:description" content="Únete a nosotros del 11 al 14 de diciembre para una experiencia espiritual inolvidable llena de adoración, enseñanza y comunión. ¡Regístrate Gratis!" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?= base_url('assets/img/banner/flyerevento.jpg'); ?>">
    <meta property="og:locale" content="pe">

    <meta name='robots' content='max-image-preview:large' />
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta name="keywords" content="Evento evangelístico Pichari, VRAEM, Avivamiento Perú, Congreso cristiano, Adoración y enseñanza, Registro gratuito, Encuentro de jóvenes cristianos, Predicación en vivo, Ministerio de oración, Misión evangelística, Conferencias bíblicas, Comunidad cristiana, Inscripciones abiertas, Voluntariado, Ministerio de alabanza, Restauración espiritual" />
    <meta name="googlebot" content="index, follow" />
    <meta name="distribution" content="Global">
    <!-- begin SEO -->
    <meta itemprop="name" content="Mega Evento Evangelístico en Pichari - Vraem | del 11 al 14 DIC">
    <meta itemprop="url" content="<?php echo base_url(); ?>">
    <meta itemprop="description" content="Únete a nosotros del 11 al 14 de diciembre para una experiencia espiritual inolvidable llena de adoración, enseñanza y comunión. ¡Regístrate Gratis!">
    <meta itemprop="image" content="<?= base_url('assets/img/banner/flyerevento.jpg'); ?>">
    <!-- begin twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mega Evento Evangelístico en Pichari - Vraem | del 11 al 14 DIC">
    <meta name="twitter:description" content="Únete a nosotros del 11 al 14 de diciembre para una experiencia espiritual inolvidable llena de adoración, enseñanza y comunión. ¡Regístrate Gratis!">
    <meta name="twitter:image" content="<?= base_url('assets/img/banner/flyerevento.jpg'); ?>">
    <meta name="twitter:site" content="@evoxlab">
    <meta name="twitter:creator" content="@evoxlab">
    <meta name="twitter:domain" content="<?php echo base_url(); ?>">
    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/meanmenu.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/backtotop.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/flaticon_musicly.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome-pro.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/spacing.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
    <!-- begin alert toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- begin favico -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon/favicon-96x96.png') ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?= base_url('assets/img/favicon/favicon.svg') ?>" />
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon/favicon.ico') ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/favicon/apple-touch-icon.png') ?>" />
    <link rel="manifest" href="<?= base_url('assets/img/favicon/site.webmanifest') ?>" />
    <script>
        var site = '<?php echo base_url(); ?>';
    </script>
    <!-- end favico -->
    <?= $this->renderSection('css') ?>
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Arrastrar</span></div>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="line-loader">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- preloader end -->
    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a>
                                <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="hr-1 mt-30 mb-30 d-xl-none"></div>
                    <div class="mobile-menu fix mb-30  d-xl-none"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->
    <!-- Header area start -->
    <header>
        <div id="header-sticky" class="header__area header-1 ms-header-fixed ms-bg-body">
            <div class="container-fluid ms-maw-1710">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mega__menu-wrapper p-relative">
                            <div class="header__main ms-border2 d-flex align-items-center justify-content-between">
                                <div class="header__logo pt-25 pb-25">
                                    <a>
                                        <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="logo" width="80">
                                    </a>
                                </div>
                                <div class="header__right">
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu main-menu-ff-space">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <li>
                                                        <a href="/">Inicio</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Reservar Lugar Ahora</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?= base_url('iniciar-sesion') ?>">Iniciar Sesión</a>
                                                    </li>
                                                    <li style="padding-right: 10px;">
                                                        <a class="p-2" href="https://www.facebook.com/profile.php?id=61581113053856" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        <!-- <a class="p-2" href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                                        <a class="p-2" href="https://www.youtube.com/" title="YouTube" target="_blank"><i class="fab fa-youtube"></i></a> -->
                                                    </li>
                                                </ul>
                                            </nav>
                                            <!-- for wp -->
                                            <div class="header__hamburger ml-50 d-none">
                                                <button type="button" class="hamburger-btn offcanvas-open-btn">
                                                    <span>01</span>
                                                    <span>01</span>
                                                    <span>01</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header__hamburger">
                                        <div class="sidebar__toggle">
                                            <a class="bar-icon" href="javascript:void(0)">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->
    <div class="ms-all-content ms-content-mobile-space pt-130">
        <!-- Begin main content -->
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
    <!-- Back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top end -->
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
    <script src="<?= base_url('assets/js/home.js?2') ?>"></script>
    <!-- end js form contact -->
    <script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="<?= base_url('assets/js/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/nice-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/meanmenu.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/slick.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/backtotop.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/gsap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/ScrollToPlugin.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/SplitText.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/ScrollTrigger.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.jplayer.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jplayer.playlist.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <?= $this->renderSection('js') ?>
</body>

</html>