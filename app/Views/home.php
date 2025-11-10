<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Ikimo
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page illustration -->
<style>
    .hero-bg-1 {
        background-image: url('<?= base_url('assets/images/bg/bg1.png') ?>');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        /* good for small screens */

        min-height: 100vh;
        display: flex;
        align-items: center;
        margin-top: -80px;
    }

    /* On large desktops show the whole image (no cropping) */
    @media (min-width: 1200px) {
        .hero-bg-1 {
            background-size: cover;
            background-position: center top;
            min-height: 100vh;
            margin-top: -80px;
        }
    }
</style>

<section class="hero-bg-1 contenedor-imagen-ikimo">
    <div class="cnr4s c1b3v c1nzj cg7lc" style="margin-top: auto;">
        <div class="cwt1y cegiy" style="display: flex; flex-wrap: wrap; align-items: center; gap: 2rem;">
            <!-- Parte Derecha -->
            <div style="flex: 1 1 320px; min-width: 280px; display: flex; flex-direction: column; align-items: center;">
                <div class="cjc8o caswb">
                    <a id="goDemo"
                        class="cjfft c3wrs cz81t cdoke cthjc c3wrs cjblw cu25a ctuu0 cc0ec ct5xv cu3wb ckbx6 crbqt chdkf cckl9 ch2pc cqb0q cyp9z cklw9 cuwvd cx2av"
                        style="width: 100%;text-align: center;background-color: yellow;">¡ Iniciar Aventura FInanciera !</a>
                </div>
                <!-- Contact form -->
            </div>
        </div>
    </div>
</section>
<!-- Begin cronometro -->
<section>
    <div class="cnr4s c1b3v c1nzj cg7lc">
        <div class="cwt1y cegiy" style="display: flex; flex-wrap: wrap; align-items: center; gap: 2rem;">
            <!-- Parte Izquierda -->
            <div style="flex: 1 1 320px; min-width: 280px;">
                <!-- Section header -->
                <div class="c7bf6">
                    <p class="sm:text-xl px-4 max-w-xl mx-auto">
                        <span>MUY PRONTO</span>
                    </p>
                    <!-- CONTADOR DE CUENTA REGRESIVA (NUEVO) -->
                    <div id="countdown-timer" class="countdown-container">
                        <!-- Los bloques del contador se insertarán aquí por JavaScript -->
                    </div>

                    <h1 style="color:#39FF14 !important" class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f c8jw0 c370l cm1lk" data-aos="fade-up">
                        El secreto de IKIMO
                    </h1>


                    <!-- Contenedor del Video Responsivo -->
                    <!-- Imagen de Vista Previa del Video en la Página --><!-- Usa tu imagen personalizada aquí, por ejemplo: 'ruta/a/tu/imagen_video.jpg' -->
                    <div id="video-preview-image"
                        class="page-video-preview"
                        style="background-image: url('https://placehold.co/600x337/000000/ffffff?text=Tu+Video+Aqui');margin: auto !important;padding-bottom: 48%;"
                        onclick="openVideoModal()">

                        <!-- Icono de Play de YouTube (SVG) --><svg class="play-icon" viewBox="0 0 68 48" fill="#FF0000">
                            <path d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.02-7.07C58.85,0.79,53.8,0,50.26,0c-6.71,0-13.43,0-20.14,0C27.91,0.01,23.32,0.76,19.33,2.46C16.8,4.12,15.09,6.6,14.31,9.53C13.53,12.45,13.5,15.75,13.5,19.14c0,3.39,0,6.78,0,10.17c0.03,3.45,0.76,6.86,2.23,9.75c1.55,3.08,3.95,5.43,7.2,6.7c3.78,1.48,7.99,2.22,12.44,2.22c4.45,0,8.66-0.74,12.44-2.22c3.25-1.27,5.65-3.62,7.2-6.7c1.47-2.89,2.2-6.3,2.23-9.75c0-3.39,0-6.78,0-10.17C66.55,15.75,66.52,12.45,66.52,7.74z" fill="#FF0000"></path>
                            <path d="M45.5,24.8l-12.87,7.28c-0.28,0.16-0.58,0.2-0.86,0.2c-0.29,0-0.57-0.04-0.83-0.12c-0.63-0.25-1.02-0.89-1.02-1.59V19.14c0-0.7,0.39-1.34,1.02-1.59c0.5-0.2,1.07-0.12,1.54,0.12l12.87,7.28C46.39,24.1,46.5,24.3,46.5,24.6C46.5,24.9,46.39,25.1,45.5,24.8z" fill="#FFFFFF"></path>
                        </svg>
                    </div>

                    <!-- Descripción del Video/Landing -->
                    <div class="container">
                        <p class="description-text sm:text-xl px-4 max-w-xl mx-auto">
                            La compañía más grande de mercado en red se lanza en pre apertura. El 27 de noviembre Superación personal, Tecnología y Entretenimiento con el Rey de todos los planes de compensación y un liderazgo mundial.
                            <br><br>
                            <span style="color:#39FF14">MIRA EL VIDEO HASTA EL FINAL</span>
                        </p>
                    </div>
                </div> <!-- Cierre de background-wrapper --><!-- Modal (Pop-up) para el Video -->
                <!-- Modal (Pop-up) para el Video -->
                <div id="video-modal" class="modal-overlay" onclick="closeVideoModal()">
                    <div class="modal-content" onclick="event.stopPropagation()">
                        <!-- Botón de cierre -->
                        <button class="modal-close-btn" onclick="closeVideoModal()">&times;</button>
                        <!-- Contenedor del video responsivo dentro del modal -->
                        <div id="modal-video-container" class="video-container-modal">
                            <!-- El iframe se cargará aquí -->
                        </div>
                    </div>
                </div>

                <script>
                    // ID del video de YouTube que quieres reproducir
                    const YOUTUBE_VIDEO_ID = 'fAfHrnoDMbU';

                    // --- Referencias a los elementos del DOM ---
                    const videoPreviewImage = document.getElementById('video-preview-image');
                    const videoModal = document.getElementById('video-modal');
                    const modalVideoContainer = document.getElementById('modal-video-container');
                    const countdownTimer = document.getElementById('countdown-timer');

                    // Fecha y hora objetivo (27 de noviembre de 2025 a las 10:00:00 AM)
                    // Por favor, ajusta esto si la zona horaria es crítica.
                    const countdownDate = new Date("Nov 27, 2025 10:00:00").getTime();

                    /**
                     * Inicializa y actualiza el contador de cuenta regresiva cada segundo.
                     */
                    function startCountdown() {
                        // Actualizar el contador cada 1 segundo
                        const interval = setInterval(function() {

                            // Obtener la fecha y hora de hoy
                            const now = new Date().getTime();

                            // Encontrar la distancia entre hoy y la fecha de la cuenta regresiva
                            const distance = countdownDate - now;

                            // Cálculos de tiempo para días, horas, minutos y segundos
                            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Función para asegurar que el número tenga dos dígitos (ej. 05 en lugar de 5)
                            const formatTime = (time) => String(time).padStart(2, '0');

                            // Si la cuenta regresiva aún no ha terminado
                            if (distance > 0) {
                                countdownTimer.innerHTML = `
                                    ${createBlock(formatTime(days), "DAYS")}
                                    ${createBlock(formatTime(hours), "HOURS")}
                                    ${createBlock(formatTime(minutes), "MINUTES")}
                                    ${createBlock(formatTime(seconds), "SECONDS")}
                                `;
                            } else {
                                // Si la cuenta regresiva terminó, limpiar el intervalo y mostrar mensaje
                                clearInterval(interval);
                                countdownTimer.innerHTML = '<h2 class="text-3xl font-bold text-center text-green-400">¡LANZAMIENTO EN VIVO AHORA!</h2>';
                            }
                        }, 1000);
                    }

                    /**
                     * Crea el bloque HTML para un componente de tiempo (Días, Horas, etc.).
                     * @param {string} value - El valor del tiempo (ej. "07").
                     * @param {string} label - La etiqueta del tiempo (ej. "DÍAS").
                     * @returns {string} El HTML del bloque.
                     */
                    function createBlock(value, label) {
                        return `
                        <div class="countdown-block" style="display: inline-block; margin: 0 10px; text-align: center; min-width: 80px; flex: 1 1 25%;">
                                <span class="countdown-number" style="display: block; font-size: 2.5rem; font-weight: bold; color: #39FF14;">${value}</span>
                                <span class="countdown-label" style="display: block; font-size: 0.875rem; color: #fff; margin-top: 5px;">${label}</span>
                        </div>`;
                    }

                    // --- Configuración de la imagen de vista previa en la página ---
                    function setupPreviewImage() {
                        if (YOUTUBE_VIDEO_ID && videoPreviewImage) {
                            const thumbnailUrl = `https://img.youtube.com/vi/${YOUTUBE_VIDEO_ID}/hqdefault.jpg`;
                            videoPreviewImage.style.backgroundImage = `url('${thumbnailUrl}')`;
                        } else {
                            console.error("YOUTUBE_VIDEO_ID no está definido.");
                        }
                    }

                    /**
                     * Abre el modal del video y carga el iframe de YouTube.
                     */
                    function openVideoModal() {
                        if (!YOUTUBE_VIDEO_ID) {
                            console.error("YOUTUBE_VIDEO_ID no está definido.");
                            return;
                        }

                        modalVideoContainer.innerHTML = '';

                        const iframeHTML = `
                <iframe 
                    src="https://www.youtube.com/embed/${YOUTUBE_VIDEO_ID}?autoplay=1&rel=0&showinfo=0&modestbranding=1" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            `;

                        modalVideoContainer.innerHTML = iframeHTML;
                        videoModal.classList.add('open');
                        document.body.style.overflow = 'hidden';
                    }

                    /**
                     * Cierra el modal del video y detiene la reproducción.
                     */
                    function closeVideoModal() {
                        videoModal.classList.remove('open');
                        modalVideoContainer.innerHTML = '';
                        document.body.style.overflow = '';
                    }

                    // Cierra el modal si se presiona la tecla ESC
                    document.addEventListener('keydown', (event) => {
                        if (event.key === 'Escape' && videoModal.classList.contains('open')) {
                            closeVideoModal();
                        }
                    });

                    // Iniciar todo al cargar la página
                    window.onload = function() {
                        setupPreviewImage();
                        startCountdown(); // Inicia el contador
                    };
                </script>
            </div>
        </div>
    </div>
</section>
<!-- end cronometro -->
<!-- Begin pre lanzamiento -->
<section>
    <div class="cnr4s c1b3v c1nzj cg7lc">
        <div class="creo4 c5c70">
            <!-- Section header -->
            <div class="cwt1y c7bf6 c90dr c1nzj cxbbo" style="padding-top: 3rem;padding-bottom: 0rem;">
                <h2 style="color: #39FF14 !important" class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px">
                    Pre lanzamiento mundial <br />27.11.25
                </h2>
            </div>
            <div class="container">
                <p class="description-text sm:text-xl px-4 max-w-xl mx-auto">
                    Si soñaste con ser parte de algo GRANDE ¡esta es tu oportunidad
                </p>
            </div>
            <div class="cwt1y c7bf6 c90dr c1nzj cxbbo" style="padding-top: 0.5rem;">
                <h2 style="color: white !important" class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px">
                    4 Industrias en 1
                </h2>
            </div>
            <div>
                <!-- Cards -->
                <style>
                    .grid-12 {
                        display: grid;
                        grid-template-columns: repeat(12, minmax(0, 1fr));
                        gap: 1.25rem;
                    }

                    .grid-12 .col-3 {
                        grid-column: span 3;
                    }

                    @media (max-width: 1024px) {
                        .grid-12 .col-3 {
                            grid-column: span 6;
                        }
                    }

                    @media (max-width: 640px) {
                        .grid-12 .col-3 {
                            grid-column: span 12;
                        }
                    }

                    .grid-12 img {
                        width: 100%;
                        height: auto;
                        display: block;
                    }
                </style>

                <div class="grid-12">
                    <!-- Item #1 -->
                    <article class="col-3 cz81t cdoke cthjc cjblw cu25a cc0ec c57u1 ct9h7 cgxs1 chif5 ci31u cu3wb ctjen crbqt chdkf cfh7o cklw9 c7kp8">
                        <div class="cgoqt c2vzz csvh0">
                            <div>
                                <img src="<?php echo site_url() . "assets/images/industrias/gen1.jpg" ?>" alt="Generación 1 Logo">
                            </div>
                        </div>
                    </article>

                    <!-- Item #2 -->
                    <article class="col-3 cz81t cdoke cthjc cjblw cu25a cc0ec c57u1 ct9h7 cgxs1 chif5 ci31u cu3wb ctjen crbqt chdkf cfh7o cklw9 c7kp8">
                        <div class="cgoqt c2vzz csvh0">
                            <div>
                                <img src="<?php echo site_url() . "assets/images/industrias/gen2.png" ?>" alt="Generación 2 Logo">
                            </div>
                        </div>
                    </article>

                    <!-- Item #3 -->
                    <article class="col-3 cz81t cdoke cthjc cjblw cu25a cc0ec c57u1 ct9h7 cgxs1 chif5 ci31u cu3wb ctjen crbqt chdkf cfh7o cklw9 c7kp8">
                        <div>
                            <img src="<?php echo site_url() . "assets/images/industrias/gen3.png" ?>" alt="Generación 3 Logo">
                        </div>
                    </article>

                    <!-- Item #4 -->
                    <article class="col-3 cz81t cdoke cthjc cjblw cu25a cc0ec c57u1 ct9h7 cgxs1 chif5 ci31u cu3wb ctjen crbqt chdkf cfh7o cklw9 c7kp8">
                        <div>
                            <img src="<?php echo site_url() . "assets/images/industrias/gen4.png" ?>" alt="Generación 4 Logo">
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End pre lanzamiento -->

<!-- Programer access & Clients-->
<section class="cklw9" id="pricing">
    <div class="cpqz8 cqv4c cbxke cssij ciqov cltyg cossi" aria-hidden="true">
        <img class="cwchu" src="<?php echo site_url() . "assets/images/blurred-shape.svg" ?>" width="760"
            height="668" alt="Blurred shape">
    </div>

    <div class="cnr4s c1b3v c1nzj cg7lc">
        <div class="creo4 cwt1y c5c70 cegiy">
            <!-- Section header -->
            <div class="c7bf6 c90dr c1nzj" style="padding-bottom: 5em;">
                <div
                    class="ckmmd cnsl6 c0u5w chuib czlz1 c93x7 cpodb cqmuf c4sxq cjnt3 c0dcb cuq1a c25pz c2gzf">
                    <span class="cjdx7 cmgwh csuc4 ctbdc cgrvg c4sxq">Posiciónate ahora y recibirás beneficios que nadie recibirá en el plan de compensación.</span>
                </div>
                <h2 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px cniu2">
                    Sé el pionero a nivel mundial
                </h2>
                <div class="">
                    <!-- Contact form -->
                    <form name="form_two" id="form_two" class="c1nzj" onsubmit="send_two()" action="javascript:void(0)" enctype="multipart/form-data" method="post">
                        <div class="cjc8o">
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email" style="text-align: left;">Nombres y Apellidos</label>
                                <input id="name_two" name="name_two" type="text" class="c9vss cuwvd" placeholder="Tu nombre y apellido" required="">
                            </div>
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email" style="text-align: left;">Email</label>
                                <input id="email_two" name="email_two" type="email" class="c9vss cuwvd" placeholder="email@ejemplo.com" required="">
                            </div>
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="country_two" style="text-align: left;">País</label>
                                <select id="country_two" name="country_two" class="c9vss cuwvd" style="background-color: #1a1a1a; color: #ffffff;" required="">
                                    <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="">Selecciona tu país</option>
                                    <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="AR">🇦🇷 Argentina</option>
                                    <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="BO">🇧🇴 Bolivia</option>
                                    <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="BR">🇧🇷 Brasil</option>
                                    <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="CL">🇨🇱 Chile</option>
                                    <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="CO">🇨🇴 Colombia</option>
                                    <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="CR">🇨🇷 Costa Rica</option>
                                    <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="EC">🇪🇨 Ecuador</option>
                                    <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="SV">🇸🇻 El Salvador</option>
                                    <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="ES">🇪🇸 España</option>
                                    <options style="background-color: #1a1a1a; color: #ffffff;" required="" value="GT">🇬🇹 Guatemala</option>
                                        <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="HN">🇭🇳 Honduras</option>
                                        <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="MX">🇲🇽 México</option>
                                        <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="NI">🇳🇮 Nicaragua</option>
                                        <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="PA">🇵🇦 Panamá</option>
                                        <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="PY">🇵🇾 Paraguay</option>
                                        <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="PE">🇵🇪 Perú</option>
                                        <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="DO">🇩🇴 República Dominicana</option>
                                        <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="UY">🇺🇾 Uruguay</option>
                                        <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="VE">🇻🇪 Venezuela</option>
                                        <option style="background-color: #1a1a1a; color: #ffffff;" required="" value="US">🇺🇸 Estados Unidos</option>
                                </select>
                            </div>
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email" style="text-align: left;">Teléfono</label>
                                <input id="phone_two" name="phone_two" type="tel" class="c9vss cuwvd" placeholder="Ej: +51 987654321" pattern="^\+\d{1,3}\s\d{1,14}$" required="">
                            </div>
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email" style="text-align: left;">¿Tiene Sponsor?</label>
                                <div>
                                    <input type="radio" id="sponsor_yes" name="sponsor" value="yes" required onclick="document.getElementById('sponsor_details').style.display = 'block';">
                                    <label for="sponsor_yes">Sí</label>
                                    <input type="radio" id="sponsor_no" name="sponsor" value="no" required onclick="document.getElementById('sponsor_details').style.display = 'none';">
                                    <label for="sponsor_no">No</label>
                                </div>
                            </div>
                            <div id="sponsor_details" style="display: none;">
                                <div>
                                    <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email" style="text-align: left;">Ingrese Código</label>
                                    <input id="email_two" name="email_two" type="text" class="c9vss cuwvd" placeholder="RC01" required="">
                                </div>
                                <div>
                                    <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email" style="text-align: left;">Nombre del Sponsor</label>
                                    <input id="email_two" name="email_two" type="text" class="c9vss cuwvd" placeholder="Aparecerá el nombred del Sponsor" required="">
                                </div>
                            </div>
                        </div>
                        <div class="cjc8o caswb">
                            <button id="submit_two" class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc ceu05 cuwvd cx2av">
                                Registrarme Ahora
                            </button>
                            <a id="goDemo_two" href="https://demo.evox-lab.com/" class="cjfft c3wrs cz81t cdoke cthjc c3wrs cjblw cu25a ctuu0 cc0ec ct5xv cu3wb ckbx6 crbqt chdkf cckl9 ch2pc cqb0q cyp9z cklw9 cuwvd cx2av" style="width: 100%;display:none;background-color: yellow;">
                                Ver Demo Ahora
                            </a>
                        </div>
                    </form>
                </div>
            </div>


            <section>
                <div class="cnr4s c1b3v c1nzj cg7lc">
                    <div class="creo4 c5c70">
                        <!-- Section header -->
                        <div class="cwt1y c7bf6 c90dr c1nzj cxbbo" style="padding-top: 3rem;">
                            <h2 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px">
                                Lo que Dicen Nuestros Clientes
                            </h2>
                        </div>

                        <div>
                            <!-- Cards -->
                            <div class="cqjw1 c4t1y c5lqd cs8ye cg5mp c1nzj cjr0o cbb52" data-masonry="">
                                <!-- Testimonial #1 -->
                                <article class="cz81t cdoke cthjc cjblw cu25a cc0ec c57u1 ct9h7 cgxs1 chif5 ci31u cu3wb ctjen crbqt chdkf cfh7o cklw9 c7kp8">
                                    <div class="cgoqt c2vzz csvh0">
                                        <div>
                                            <img src="<?php echo site_url() . "assets/images/ki_logo.png" ?>" width="80"
                                                alt="Kilife Logo">
                                        </div>
                                        <p class="c9quv ch57t cthiu">
                                            Kilife ha experimentado mejoras significativas en la gestión de nuestra creciente comunidad desde que implementamos Evox Lab. Pasamos de 500 a 5,000 afiliados sin problemas gracias al sistema.
                                        </p>
                                        <div class="cpodb c25pz csvh0">
                                            <div class="cr6se c25fq c3e84">
                                                <span>Milton Chávez.</span>
                                                <span class="cqvkd"> - </span>
                                                <a class="csmp5 cthiu c22pv">CEO - Kilife</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Testimonial #2 -->
                                <article
                                    class="cz81t cdoke cthjc cjblw cu25a cc0ec c57u1 ct9h7 cgxs1 chif5 ci31u cu3wb ctjen crbqt chdkf cfh7o cklw9 c7kp8" style="margin-top: 0px;">
                                    <div class="cgoqt c2vzz csvh0">
                                        <div>
                                            <img src="<?php echo site_url() . "assets/images/fk_logo.png" ?>" width="80"
                                                alt="Familia Kaizen Logo">
                                        </div>
                                        <p class="c9quv ch57t cthiu">
                                            Como organización enfocada en empoderar a los emprendedores, necesitábamos una plataforma que pudiera manejar las complejidades de nuestra red. Nuestros distribuidores confían más porque ven sus comisiones en tiempo real.
                                        </p>
                                        <div class="cpodb c25pz csvh0">
                                            <div class="cr6se c25fq c3e84">
                                                <span>Renzo Cuya</span>
                                                <span class="cqvkd"> - </span>
                                                <a class="csmp5 cthiu c22pv">CEO de Familia Kaizen</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Testimonial #3 -->
                                <article class="cz81t cdoke cthjc cjblw cu25a cc0ec c57u1 ct9h7 cgxs1 chif5 ci31u cu3wb ctjen crbqt chdkf cfh7o cklw9 c7kp8" style="margin-top: 0px;">
                                    <div class="cgoqt c2vzz csvh0">
                                        <div>
                                            <img src="<?php echo site_url() . "assets/images/mn_logo.png" ?>" width="80"
                                                alt="Mundo Network Logo">
                                        </div>
                                        <p class="c9quv ch57t cthiu">
                                            Evox Lab se ha convertido en una parte integral de las operaciones de Mundo Network. Sus completas funciones, en particular para la gestión de la estructura de nuestra red. Hoy dedicamos menos tiempo a Excel y más a crecer.
                                        </p>
                                        <div class="cpodb c25pz csvh0">
                                            <div class="cr6se c25fq c3e84">
                                                <span>Kevin Yauri.</span>
                                                <span class="cqvkd"> - </span>
                                                <a class="csmp5 cthiu c22pv">VP - Mundo Network</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Testimonial #4 -->
                                <article
                                    class="cz81t cdoke cthjc cjblw cu25a cc0ec c57u1 ct9h7 cgxs1 chif5 ci31u cu3wb ctjen crbqt chdkf cfh7o cklw9 c7kp8" style="margin-top: 0.0000152588px;">
                                    <div class="cgoqt c2vzz csvh0">
                                        <div>
                                            <img src="<?php echo site_url() . "assets/images/alelife_logo.png" ?>" width="80"
                                                alt="Alelife Logo">
                                        </div>
                                        <p class="c9quv ch57t cthiu">
                                            La escalabilidad de Evox Lab ha sido un cambio radical para Alelife Global a medida que continuamos expandiendo nuestra presencia global. La facturación, que antes era una pesadilla de fin de mes, ahora se genera automáticamente con un solo clic.
                                        </p>
                                        <div class="cpodb c25pz csvh0">
                                            <div class="cr6se c25fq c3e84">
                                                <span>Alejandro Huamni.</span>
                                                <span class="cqvkd"> - </span>
                                                <a class="csmp5 cthiu c22pv">Fundador - Alelife Global</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Testimonial #5 -->
                                <article
                                    class="cz81t cdoke cthjc cjblw cu25a cc0ec c57u1 ct9h7 cgxs1 chif5 ci31u cu3wb ctjen crbqt chdkf cfh7o cklw9 c7kp8" style="margin-top: -23px;">
                                    <div class="cgoqt c2vzz csvh0">
                                        <div>
                                            <img src="<?php echo site_url() . "assets/images/glowell_logo.png" ?>" width="80" alt="Glowell Life Logo">
                                        </div>
                                        <p class="c9quv ch57t cthiu">
                                            El enfoque de Glowell Life está en el bienestar y la comunidad, y Evox Lab nos ha proporcionado una plataforma confiable y eficiente para gestionar nuestra red y recompensar a nuestros miembros por compartir su pasión.
                                        </p>
                                        <div class="cpodb c25pz csvh0">
                                            <div class="cr6se c25fq c3e84">
                                                <span>Miguel Trelles.</span>
                                                <span class="cqvkd"> - </span>
                                                <a class="csmp5 cthiu c22pv">VP - Glowell Life</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Testimonial #6 -->
                                <article
                                    class="cz81t cdoke cthjc cjblw cu25a cc0ec c57u1 ct9h7 cgxs1 chif5 ci31u cu3wb ctjen crbqt chdkf cfh7o cklw9 c7kp8" style="margin-top: 0.0000152588px;">
                                    <div class="cgoqt c2vzz csvh0">
                                        <div>
                                            <img src="<?php echo site_url() . "assets/images/gwinners_logo.png" ?>" width="80" alt="Global Winners Logo">
                                        </div>
                                        <p class="c9quv ch57t cthiu">
                                            Nosotros en Global Winners podemos dar fe de su poder y eficiencia en la gestión de un próspero negocio de mercadeo en red. La plataforma ofrece un conjunto completo de herramientas que realmente respaldan el crecimiento y agilizan las operaciones.
                                        </p>
                                        <div class="cpodb c25pz csvh0">
                                            <div class="cr6se c25fq c3e84">
                                                <span>Isac Condori.</span>
                                                <span class="cqvkd"> - </span>
                                                <a class="csmp5 cthiu c22pv">Fundador - Global Winners</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>

<!-- contact -->
<section class="czijd cklw9" id="contact">
    <div class="cpqz8 cfkn5 cbxke cssij ciqov cah73 cossi cref9" aria-hidden="true">
        <img class="cwchu" src="<?php echo site_url() . "assets/images/blurred-shape.svg" ?>" width="760"
            height="668" alt="Blurred shape">
    </div>
    <div class="max-w6xl c1b3v c1nzj cg7lc">
        <div class="cjdx7 cxfsi ct16x cwt1y cegiy">
            <div class="c7bf6 c90dr c1nzj">
                <h2 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px ca3a8" data-aos="fade-up">
                    ¿Listo para iniciar tu negocio multinivel?
                </h2>
                <div class="">
                    <!-- Contact form -->
                    <form name="form_two" id="form_two" class="c1nzj" onsubmit="send_two()" action="javascript:void(0)"
                        enctype="multipart/form-data" method="post">
                        <div class="cjc8o">
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email"
                                    style="text-align: left;">Nombre</label>
                                <input id="name_two" name="name_two" type="text" class="c9vss cuwvd"
                                    placeholder="Tu nombre y apellido" required>
                            </div>
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email"
                                    style="text-align: left;">Empresa</label>
                                <input id="company_two" name="company_two" type="text" class="c9vss cuwvd"
                                    placeholder="Empresa" required>
                            </div>
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email"
                                    style="text-align: left;">Email</label>
                                <input id="email_two" name="email_two" type="email" class="c9vss cuwvd"
                                    placeholder="email@ejemplo.com" required>
                            </div>
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email"
                                    style="text-align: left;">Teléfono</label>
                                <input id="phone_two" name="phone_two" type="tel" class="c9vss cuwvd"
                                    placeholder="+51 987654321" required>
                            </div>
                        </div>
                        <div class="cjc8o caswb">
                            <button id="submit_two"
                                class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc ceu05 cuwvd cx2av">
                                Solicitar demostración gratuita
                            </button>
                            <a id="goDemo_two" href="https://demo.evox-lab.com/"
                                class="cjfft c3wrs cz81t cdoke cthjc c3wrs cjblw cu25a ctuu0 cc0ec ct5xv cu3wb ckbx6 crbqt chdkf cckl9 ch2pc cqb0q cyp9z cklw9 cuwvd cx2av"
                                style="width: 100%;display:none;background-color: yellow;">
                                Ver Demo Ahora
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
</section>

<!-- Begin footer -->
<footer>
    <div class="cnr4s cklw9 c1b3v c1nzj cg7lc">
        <!-- Footer illustration -->
        <div class="cpqz8 cfkn5 cbxke cssij ciqov cossi" aria-hidden="true">
            <img class="cwchu" src="<?php echo site_url() . "assets/images/footer-illustration.svg" ?>" width="1076"
                height="378" alt="Footer illustration">
        </div>

        <div class="c90dr c1nzj">
            <div class="c242q">
                <div class="c7bf6" style="padding-bottom: 20px;">
                    <div class="cr6se c25fq c3e84">
                        <a class="csmp5 cthiu c22pv">&copy; 2025 Evox Lab. Todos los derechos reservados.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->
<?= $this->endSection() ?>