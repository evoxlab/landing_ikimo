<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
El secreto de Ikimo
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page illustration -->
<style>
    .hero-bg-1 {
        background-image:
            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url('<?= base_url('assets/images/bg/bg.png') ?>');
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

<!-- Hero -->
<section class="hero-bg-1" >
    <div class="cnr4s c1b3v c1nzj cg7lc">
        <div class="cwt1y cegiy" style="display: flex; flex-wrap: wrap; align-items: center; gap: 2rem;">
            <!-- Parte Izquierda -->
            <div>
                <!-- Section header -->
                <div class="c7bf6">
                    <h1 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f c8jw0 c370l" data-aos="fade-up" style="text-transform: lowercase;color:#d7f952">
                        El secreto de
                    </h1>
                    <h1 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f c8jw0 c370l cm1lk" data-aos="fade-up" style="font-size: 800%;color:#d7f952">
                        <i>IKIMO</i>
                    </h1>
                    <div class="c90dr c1nzj">
                        <p class="cthiu cfshg cs7a1" data-aos="fade-up" data-aos-delay="200">
                            Si soñaste con formar parte de algo grande, ¡esta es tu oportunidad!. El misterio de la riqueza en el MLM
                        </p>
                        <a href="#hero_start" onclick="event.preventDefault(); document.querySelector('#hero_start').scrollIntoView({ behavior: 'smooth' });"
                            class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc ceu05 cuwvd cx2av">
                            Iniciar Viaje
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- El secreto & video -->
<section id="hero_start" class="cklw9">
    <div class="cpqz8 cfkn5 cbxke cssij cxawe cf7dm cossi" aria-hidden="true">
        <img class="cwchu" src="<?php echo site_url() . "assets/images/blurred-shape-gray.svg" ?>" width="760"
            height="668" alt="Blurred shape">
    </div>
    <div class="co5u0 cpqz8 csuym cbxke cssij ciqov ctn85 cossi" aria-hidden="true">
        <img class="cwchu" src="<?php echo site_url() . "assets/images/blurred-shape.svg" ?>" width="760"
            height="668" alt="Blurred shape">
    </div>

    <div class="cnr4s c1b3v c1nzj cg7lc">
        <div class="creo4 cwt1y c5c70 cegiy">
            <!-- Section header -->
            <div class="c7bf6 c90dr cqzei c1nzj c1fmo" style="max-width: 60rem;">
                <h2 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px c1fmo" style="color: #d7f952;">
                    El Secreto de Ikimo
                </h2>
                <p class="cthiu cby5j cqzei cxbbo">
                    La compañía más grande en mercadeo en red se lanza en pre apertura. Este 27 de noviembre. Superación personal, Tecnología y Entretenimiento
                    Con el REY de todos los planes de Compensación y un Liderazgo mundial.
                </p>
                <div class="c1nzj" style="margin: 2rem 0;">
                    <div id="vimeoContainer" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; background: #000; border-radius: 8px; cursor: pointer;">
                        <img src="" alt="Video thumbnail" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80px; height: 80px; background: rgba(255, 0, 0, 0.8); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 40px; height: 40px; margin-left: 5px;" viewBox="0 0 24 24" fill="white">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <script>
                    (function() {
                        const container = document.getElementById('vimeoContainer');
                        const vimeoUrl = 'https://vimeo.com/1135644092/486df1c943';
                        const videoId = '1135644092';
                        const videoHash = '486df1c943';

                        // Load thumbnail via oEmbed
                        fetch('https://vimeo.com/api/oembed.json?url=' + encodeURIComponent(vimeoUrl))
                            .then(r => r.json())
                            .then(d => {
                                const img = container.querySelector('img');
                                if (img && d.thumbnail_url) img.src = d.thumbnail_url;
                            })
                            .catch(() => {
                                const img = container.querySelector('img');
                                if (img) img.style.display = 'none';
                            });

                        container.addEventListener('click', function() {
                            this.innerHTML = '<iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://player.vimeo.com/video/' + videoId + '?h=' + videoHash + '&autoplay=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
                        });
                    })();
                </script>

                <div class="c1nzj" style="display: flex; flex-wrap: wrap; gap: 2rem;">
                    <div style="flex: 1 1 0; min-width: 220px;margin-bottom: -10px;">
                        <h3 class="cthiu cby5j c336v cndaf cr6se cjy9f cjpk5" style="color: #d7f952;">
                            Mira el video hasta el final
                        </h3>
                        <a href="#contact" onclick="event.preventDefault(); document.querySelector('#contact').scrollIntoView({ behavior: 'smooth' });" class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc ceu05 cuwvd cx2av">
                            Quiero registrarme ahora
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pre lanzamiento -->
<section class="cklw9">
    <div class="cpqz8 cfkn5 cbxke cssij cxawe cf7dm cossi" aria-hidden="true">
        <img class="cwchu" src="<?php echo site_url() . "assets/images/blurred-shape-gray.svg" ?>" width="760"
            height="668" alt="Blurred shape">
    </div>
    <div class="co5u0 cpqz8 csuym cbxke cssij ciqov ctn85 cossi" aria-hidden="true">
        <img class="cwchu" src="<?php echo site_url() . "assets/images/blurred-shape.svg" ?>" width="760"
            height="668" alt="Blurred shape">
    </div>

    <div class="cnr4s c1b3v c1nzj cg7lc">
        <div class="creo4 c5c70 cegiy">
            <!-- Section header -->
            <div class="c7bf6 c90dr cqzei c1nzj c1fmo">
                <h2 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px c1fmo" style="color: #d7f952;">
                    Pre lanzamiento mundial
                </h2>
                <p class="cthiu cby5j" style="font-size: 3rem;  font-weight: bold;color: #d069df;">
                    27.11.25
                </p>

                <div id="countdown-wrapper" style="margin-top:1rem;margin-bottom:1rem;text-align:center;">
                    <div id="countdown" style="display:flex;justify-content:center;flex-wrap:nowrap;overflow-x:auto;-webkit-overflow-scrolling:touch;">
                        <div style="flex:0 0 auto;border:2px solid #d069df;border-radius:8px;padding:1rem;min-width:80px;text-align:center;">
                            <div id="cd-days" style="font-size:2rem;font-weight:bold;color:#d7f952;">00</div>
                            <div style="font-size:0.9rem;color:#fff;margin-top:0.5rem;">Days</div>
                        </div>
                        <div style="flex:0 0 auto;border:2px solid #d069df;border-radius:8px;padding:1rem;min-width:80px;text-align:center;">
                            <div id="cd-hours" style="font-size:2rem;font-weight:bold;color:#d7f952;">00</div>
                            <div style="font-size:0.9rem;color:#fff;margin-top:0.5rem;">Hours</div>
                        </div>
                        <div style="flex:0 0 auto;border:2px solid #d069df;border-radius:8px;padding:1rem;min-width:80px;text-align:center;">
                            <div id="cd-minutes" style="font-size:2rem;font-weight:bold;color:#d7f952;">00</div>
                            <div style="font-size:0.9rem;color:#fff;margin-top:0.5rem;">Minutes</div>
                        </div>
                        <div style="flex:0 0 auto;border:2px solid #d069df;border-radius:8px;padding:1rem;min-width:80px;text-align:center;">
                            <div id="cd-seconds" style="font-size:2rem;font-weight:bold;color:#d7f952;">00</div>
                            <div style="font-size:0.9rem;color:#fff;margin-top:0.5rem;">Seconds</div>
                        </div>
                    </div>
                    <div id="countdown-finished" style="display:none;color:#d7f952;font-size:1.5rem;font-weight:bold;margin-top:1.5rem;">
                        ¡El momento ha llegado!
                    </div>
                </div>
                <style>
                @media (max-width: 640px) {
                    #countdown > div {
                        min-width:80px;
                        padding:0.8rem;
                    }
                    #countdown > div > div:first-child {
                        font-size:1.5rem;
                    }
                }
                </style>
                <script>
                (function() {
                    const target = new Date(2025, 10, 27, 20, 0, 0);
                    const elDays = document.getElementById('cd-days');
                    const elHours = document.getElementById('cd-hours');
                    const elMinutes = document.getElementById('cd-minutes');
                    const elSeconds = document.getElementById('cd-seconds');
                    const finished = document.getElementById('countdown-finished');
                    const box = document.getElementById('countdown');

                    function pad(n){return n < 10 ? '0' + n : n;}
                    function tick() {
                        const now = new Date();
                        let diff = target.getTime() - now.getTime();
                        if (diff <= 0) {
                            box.style.display = 'none';
                            finished.style.display = 'block';
                            clearInterval(int);
                            return;
                        }
                        const s = Math.floor(diff / 1000);
                        const days = Math.floor(s / 86400);
                        const hours = Math.floor((s % 86400) / 3600);
                        const minutes = Math.floor((s % 3600) / 60);
                        const seconds = s % 60;
                        elDays.textContent = pad(days);
                        elHours.textContent = pad(hours);
                        elMinutes.textContent = pad(minutes);
                        elSeconds.textContent = pad(seconds);
                    }
                    tick();
                    const int = setInterval(tick, 1000);
                })();
                </script>
            <div>
                
            </div>

            
                
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
            <div class="c7bf6 c90dr c1nzj cxbbo" style="padding-top: 1rem;">
                <h2 style="color: white !important" class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px">
                    4 Industrias en 1
                </h2>
            </div>
        </div>
    </div>
</section>

<style>
    .pricing-bg {
        background-image:
            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url('<?= base_url('assets/images/bg/13bonos.jpg') ?>');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    @media (min-width: 1200px) {
        .pricing-bg {
            background-size: cover;
            background-position: center top;
            min-height: 100vh;
        }
    }
</style>
<!-- 13 Bonos begin-->
<section class="cklw9 pricing-bg" id="pricing">
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
                    <span class="cjdx7 cmgwh csuc4 ctbdc cgrvg c4sxq">Lo más importante</span>
                </div>
                <h2 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px cniu2">
                    13 BONOS
                </h2>
                <p class="cthiu cby5j">
                    Revelamos el secreto de Ikimo: 13 bonos revolucionarios que cambiarán por completo tu visión del MLM.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- 13 Bonos end-->
<!-- contact -->
<section class="czijd cklw9" id="contact">
    <div class="cpqz8 cfkn5 cbxke cssij ciqov cah73 cossi cref9" aria-hidden="true">
        <img class="cwchu" src="<?php echo site_url() . "assets/images/blurred-shape.svg" ?>" width="760"
            height="668" alt="Blurred shape">
    </div>
    <div class="max-w6xl c1b3v c1nzj cg7lc">
        <div class="cjdx7 cxfsi ct16x cwt1y cegiy">
            <div class="c7bf6 c90dr c1nzj">
                <h2 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px ca3a8" data-aos="fade-up" style="color: #d7f952;">
                    Asegura tu posición como fundador y sé pionero en tu país.
                </h2>
                <div class="">
                    <!-- Contact form -->
                    <form name="form" id="form" class="c1nzj" onsubmit="send()" action="javascript:void(0)" enctype="multipart/form-data" method="post">
                        <div class="cjc8o">
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="name" style="text-align: left;">Nombres</label>
                                <input id="name" name="name" type="text" class="c9vss cuwvd" placeholder="Ingrese su nombre" required="">
                            </div>
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="lastname" style="text-align: left;">Apellidos</label>
                                <input id="lastname" name="lastname" type="text" class="c9vss cuwvd" placeholder="Ingrese su apellido" required="">
                            </div>
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email" style="text-align: left;">Email</label>
                                <input id="email" name="email" type="email" class="c9vss cuwvd" placeholder="email@ejemplo.com" required="">
                            </div>
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="country" style="text-align: left;">País</label>
                                <select id="country" name="country" class="c9vss cuwvd" style="background-color: #1a1a1a; color: #ffffff;" required="">
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
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="phone" style="text-align: left;">Teléfono</label>
                                <input id="phone" name="phone" type="tel" class="c9vss cuwvd" placeholder="Ej: +51 987654321" required="">
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
                                    <label class="cthiu c25fq c3e84 cqxme cjpk5" for="sponsor_code" style="text-align: left;">Ingrese Código</label>
                                    <input id="sponsor_code" name="sponsor_code" type="text" class="c9vss cuwvd" placeholder="BR01" required style="text-transform: uppercase;" oninput="this.value=this.value.toUpperCase(); search_sponsor(this.value);">
                                </div>
                                <div>
                                    <label class="cthiu c25fq c3e84 cqxme cjpk5" for="sponsor_name" style="text-align: left;">Nombre del Sponsor</label>
                                    <input id="sponsor_name" name="sponsor_name" type="text" class="c9vss cuwvd" placeholder="Aparecerá el nombred del Sponsor" required="">
                                </div>
                            </div>
                        </div>
                        <div class="cjc8o caswb">
                            <button id="submit" class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc ceu05 cuwvd cx2av">
                                Registrarme Ahora
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
</section>

<script>
    const radioSi = document.getElementById('sponsor_yes'); // Asume que tienes un ID para el radio "Sí"
    const radioNo = document.getElementById('sponsor_no'); // Asume que tienes un ID para el radio "No"
    const sponsorFieldsContainer = document.getElementById('sponsor_details'); // Contenedor de los inputs
    const sponsorCodeInput = document.getElementById('sponsor_code');
    const sponsorNameInput = document.getElementById('sponsor_name');

    function toggleSponsorFields() {
        if (radioSi.checked) {
            // Opción "Sí": Muestra los campos y los hace requeridos
            sponsorFieldsContainer.style.display = 'block';
            sponsorCodeInput.required = true;
            sponsorNameInput.required = true;

        } else if (radioNo.checked) {
            // Opción "No": Oculta los campos y ELIMINA el atributo required
            sponsorFieldsContainer.style.display = 'none';
            sponsorCodeInput.required = false;
            sponsorNameInput.required = false;

            // Opcional: Limpia los valores cuando se ocultan
            sponsorCodeInput.value = '';
            sponsorNameInput.value = '';
        }
    }

    // Escucha los cambios
    radioSi.addEventListener('change', toggleSponsorFields);
    radioNo.addEventListener('change', toggleSponsorFields);

    // Ejecuta al inicio por si hay un estado preseleccionado
    toggleSponsorFields();
</script>
<!-- contact -->
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
                        <a class="csmp5 cthiu c22pv">&copy; 2025 ElSecretodeIkimo. Todos los derechos reservados.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->
<?= $this->endSection() ?>