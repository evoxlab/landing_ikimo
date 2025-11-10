<!DOCTYPE html>
<html lang="es-PE">
<!-- begin head -->
<head>
    <meta charset="utf-8">
    <title><?= $this->renderSection('title') ?? 'Ikimo | Evox Lab' ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="<?php echo base_url('assets/css/vendors/aos.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css?123')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css')?>" rel="stylesheet">
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

    <!-- Carga de Tailwind CSS para un diseño limpio y responsivo -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* ---------------------------------------------------- */
        /* CONFIGURACIÓN DEL FONDO (MANTENIDA) */
        /* ---------------------------------------------------- */
        .background-wrapper {
            min-height: 100vh;
            width: 100%;
            background-image: url('image-gen (20).jpg'); 
            background-size: cover; 
            background-position: center center; 
            background-repeat: no-repeat; 
            background-color: rgba(0, 0, 0, 0.4); 
            background-blend-mode: darken; 
            display: flex;
            flex-direction: column;
            align-items: center; 
            padding: 1rem; 
        }

        /* ---------------------------------------------------- */
        /* ESTILOS DEL CONTADOR DE CUENTA REGRESIVA (NUEVO) */
        /* ---------------------------------------------------- */
        .countdown-container {
            display: flex;
            justify-content: center;
            gap: 0.75rem; /* Espacio entre los bloques */
            margin-top: 2rem;
            margin-bottom: 2rem;
            flex-wrap: wrap; /* Para que se apilen en móvil */
        }

        .countdown-block {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Estilo de "caja digital" */
            background-color: rgba(0, 0, 0, 0.7);
            border: 1px solid #39FF14;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            min-width: 70px; /* Ancho mínimo para que se vean bien los dígitos */
            box-shadow: 0 0 15px rgba(57, 255, 20, 0.5); /* Sombra de neón verde */
            transition: transform 0.2s;
        }
        
        /* Efecto al pasar el ratón */
        .countdown-block:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 25px rgba(57, 255, 20, 0.8);
        }

        .countdown-number {
            font-size: 2.5rem; /* Tamaño grande para los números */
            font-weight: bold;
            color: #39FF14; /* Color neón verde */
            line-height: 1;
            font-family: monospace; /* Fuente de estilo digital/segmentado */
        }

        .countdown-label {
            font-size: 0.8rem;
            color: #ccc;
            margin-top: 0.25rem;
            text-transform: uppercase;
            font-weight: 500;
        }

        /* ---------------------------------------------------- */
        /* ESTILOS DEL POPUP (MANTENIDOS) */
        /* ---------------------------------------------------- */
        .modal-overlay {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85); 
            display: flex;
            align-items: center; 
            justify-content: center; 
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .modal-overlay.open {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            position: relative;
            width: 90%; 
            max-width: 900px; 
            background: #000;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
            padding: 1rem;
            transform: scale(0.9);
            transition: transform 0.3s ease;
        }

        .modal-overlay.open .modal-content {
            transform: scale(1);
        }

        .modal-close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            color: #fff;
            cursor: pointer;
            z-index: 1010;
            background: none;
            border: none;
            padding: 0;
            line-height: 1;
        }

        .video-container-modal {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; 
            height: 0;
        }

        .video-container-modal iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 8px;
        }

        /* ESTILOS DE LA IMAGEN DE VISTA PREVIA (MANTENIDOS) */
        .page-video-preview {
            position: relative;
            width: 100%;
            max-width: 600px; 
            padding-bottom: 33.75%; 
            height: 0;
            cursor: pointer;
            background-size: cover;
            background-position: center center;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 230, 238, 0.5); 
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 2rem;
        }

        .page-video-preview:hover {
            transform: scale(1.02);
            box-shadow: 0 0 30px rgba(0, 230, 238, 0.8);
        }

        .page-video-preview .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.9;
            transition: opacity 0.3s ease, transform 0.3s ease;
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.7));
            width: 80px; 
            height: 80px;
        }

        .page-video-preview:hover .play-icon {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1);
        }

        .description-text {
            color: #e0e0e0;
            padding: 1.5rem 1rem;
            border-radius: 10px;
            width: 100%;
            text-align: center; 
        }
    </style>


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
                <div
                    class="cz81t cdoke cthjc cjblw cu25a cc0ec cog93 cu3wb cmeda c100v crbqt c5f6v chdkf cqput cpodb c5cms cfh7o cklw9 c25pz csvh0 cqqyb ckale">
                    <!-- Site branding -->
                    <div class="cpodb cmeq7 csvh0">
                        <!-- Logo -->
                        <a class="c4sxq cynlw" aria-label="Cruip">
                            <h2 style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); color:#FFFF33 !important; font-size:clamp(1rem,5vw,2.25rem); font-weight:800; margin:0; padding:.25rem .5rem; text-shadow:0 0 6px rgba(230,255,0,0.6), 0 0 18px rgba(230,255,0,0.9), 0 2px 6px rgba(0,0,0,0.45); pointer-events:none; white-space:nowrap;">
                                EL SECRETO DE IKIMO
                            </h2>
                        </a>
                    </div>
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