<!DOCTYPE html>
<html lang="es-PE">
<!-- begin head -->
<head>
    <meta charset="utf-8">
    <title><?= $this->renderSection('title') ?? 'Ikimo | Evox Lab' ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="<?php echo base_url('assets/css/vendors/aos.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <!-- begin alert toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- end alert toastr -->
    <!-- begin favicon -->
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?php echo site_url()."assets/images/favicon/apple-touch-icon.png";?>">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo site_url()."assets/images/favicon/favicon-32x32.png";?>">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo site_url()."assets/images/favicon/favicon-16x16.png";?>">
    <link rel="mask-icon" href="<?php echo site_url()."assets/images/favicon/safari-pinned-tab.svg";?>"
        color="#ffc107">
    <meta name="msapplication-TileColor" content="#242424">
    <meta name="theme-color" content="#ffffff">
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
        <!-- begin header -->
        <?php
        $url = explode("/", uri_string());
        if (isset($url[0])) {
            $nav = $url[0];
        } else {
            $nav = "";
        }

        //set variable
        $display = null;

        switch ($nav) {
            case "gracias":
                $display = "none";
                break;
            default:
                $display = "block";
                break;
        }
        ?>
        <header class="cwcbg cuwvd cyple cjlrp">
            <div class="cnr4s c1b3v c1nzj cg7lc">
                <div
                    class="cz81t cdoke cthjc cjblw cu25a cc0ec cog93 cu3wb cmeda c100v crbqt c5f6v chdkf cqput cpodb c5cms cfh7o cklw9 c25pz csvh0 cqqyb ckale">
                    <!-- Site branding -->
                    <div class="cpodb cmeq7 csvh0">
                        <!-- Logo -->
                        <a class="c4sxq cynlw" aria-label="Cruip">
                            <img src="<?php echo site_url() . "assets/images/logo.png" ?>" width="90" alt="Evox Lab Logo">
                        </a>
                    </div>
                    <!-- Desktop sign in links -->
                    <?php
                    if ($display == "block") {
                        echo '<ul class="cpodb cjrgi cmeq7 c25pz csvh0">
                                    <li>
                                        <a class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc co516 ceu05 c8ttz" href="#contact" onclick="event.preventDefault(); document.querySelector(\'#contact\').scrollIntoView({ behavior: \'smooth\' });">Solicitar Demo</a>
                                    </li>
                                </ul>';
                    }
                    ?>
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
    <script src="<?php echo base_url('assets/js/vendors/alpinejs-focus.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendors/alpinejs.min.js')?>" defer=""></script>
    <script src="<?php echo base_url('assets/js/vendors/aos.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    <script src='<?php echo base_url('assets/js/home.js'); ?>'></script>

</body>
<!-- Mirrored from preview.cruip.com/open-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jul 2025 11:58:51 GMT -->

</html>