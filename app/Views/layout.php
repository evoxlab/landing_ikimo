<!DOCTYPE html>
<html lang="es-PE">
<!-- begin head -->

<head>
    <meta charset="utf-8">
    <title><?= $this->renderSection('title') ?? 'El secreto de Ikimo' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="La compañía más grande en mercadeo en red se lanza en pre apertura. Este 27 de noviembre. Superación personal, Tecnología y Entretenimiento Con el REY de todos los planes de Compensación y un Liderazgo mundial.">
    <meta name="author" content="Evox Lab">
    <meta name="robots" content="Index, Follow">
    <!-- begin facebook -->
    <meta property="og:site_name" content="El secreto de Ikimo" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:title" content="El secreto de Ikimo" />
    <meta property="og:description" content="La compañía más grande en mercadeo en red se lanza en pre apertura. Este 27 de noviembre. Superación personal, Tecnología y Entretenimiento Con el REY de todos los planes de Compensación y un Liderazgo mundial." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?= base_url('assets/images/flyer.jpg'); ?>">
    <meta property="og:locale" content="pe">

    <meta name='robots' content='max-image-preview:large' />
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta name="keywords" content="La compañía más grande en mercadeo en red, pre apertura, 27 de noviembre, Superación personal, Tecnología, Entretenimiento, Planes de Compensación, Liderazgo mundial" />
    <meta name="googlebot" content="index, follow" />
    <meta name="distribution" content="Global">
    <!-- begin SEO -->
    <meta itemprop="name" content="El secreto de Ikimo">
    <meta itemprop="url" content="<?php echo base_url(); ?>">
    <meta itemprop="description" content="La compañía más grande en mercadeo en red se lanza en pre apertura. Este 27 de noviembre. Superación personal, Tecnología y Entretenimiento Con el REY de todos los planes de Compensación y un Liderazgo mundial.">
    <meta itemprop="image" content="<?= base_url('assets/images/flyer.jpg'); ?>">
    <!-- begin twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="El secreto de Ikimo">
    <meta name="twitter:description" content="La compañía más grande en mercadeo en red se lanza en pre apertura. Este 27 de noviembre. Superación personal, Tecnología y Entretenimiento Con el REY de todos los planes de Compensación y un Liderazgo mundial.">
    <meta name="twitter:image" content="<?= base_url('assets/images/flyer.jpg'); ?>">
    <meta name="twitter:site" content="@evoxlab">
    <meta name="twitter:creator" content="@evoxlab">
    <meta name="twitter:domain" content="<?php echo base_url(); ?>">
    <!-- end SEO -->

    <link href="<?php echo base_url('assets/css/vendors/aos.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css?123') ?>" rel="stylesheet">
    <!-- begin alert toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- end alert toastr -->
    <!-- begin favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url("assets/images/favicon/favicon-96x96.png"); ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo base_url("assets/images/favicon/favicon.svg"); ?>" />
    <link rel="shortcut icon" href="<?php echo base_url("assets/images/favicon/favicon.ico"); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url("assets/images/favicon/apple-touch-icon.png"); ?>" />
    <link rel="manifest" href="<?php echo base_url("assets/images/favicon/site.webmanifest"); ?>" />
    <!-- end favicon -->
    <script>
        var site = '<?php echo site_url(); ?>';
    </script>
    <?= $this->renderSection('css') ?>
</head>
<!-- end head -->

<body class="cr6se czysb c3r2t cgvbq cykgn">
    <!-- Page wrapper -->
    <div class="c2lr4 czijd cc4ig cgoqt csvh0">
        <header class="cwcbg cuwvd cyple cjlrp">
            <div class="cnr4s c1b3v c1nzj cg7lc">
                <div class="cz81t cdoke cthjc cjblw cu25a cc0ec cog93 cu3wb cmeda c100v crbqt c5f6v chdkf cqput cpodb c5cms cfh7o cklw9 c25pz csvh0 cqqyb ckale">
                    <!-- Site branding -->
                    <div class="cpodb cmeq7 csvh0">
                        <!-- Logo -->
                        <a class="c4sxq cynlw" aria-label="Cruip">
                            <img src="<?php echo base_url('assets/images/logo.png') ?>" width="90" alt="El secreto de Ikimo">
                        </a>
                    </div>
                    <!-- Desktop sign in links -->
                    <ul class="cpodb cjrgi cmeq7 c25pz csvh0">
                        <li>
                            <a class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc co516 ceu05 c8ttz" href="#contact" onclick="event.preventDefault(); document.querySelector('#contact').scrollIntoView({ behavior: 'smooth' });">Registrarme</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- end header -->
        <!-- Begin main content -->
        <main>
            <?= $this->renderSection('content') ?>
        </main>


        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "timeOut": "1000"
            };
        </script>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="<?php echo base_url('assets/js/vendors/alpinejs-focus.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/vendors/alpinejs.min.js') ?>" defer=""></script>
    <script src="<?php echo base_url('assets/js/vendors/aos.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
    <script src='<?php echo base_url('assets/js/home.js?1234'); ?>'></script>

</body>
<!-- Mirrored from preview.cruip.com/open-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jul 2025 11:58:51 GMT -->

</html>