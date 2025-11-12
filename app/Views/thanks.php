<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Ikimo
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

<!-- El secreto & video -->
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
        <div class="creo4 cwt1y c5c70 cegiy">
            <!-- Section header -->
            <div class="c7bf6 c90dr cqzei c1nzj c1fmo" style="max-width: 60rem;">
                <h2 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px c1fmo" style="color: #d7f952;">
                    Gracias por registrate
                </h2>
                <p class="cthiu cby5j cqzei cxbbo">
                    Ahora un detalle muy importante que debes saber del Secreto de Ikimo
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
                        const vimeoUrl = 'https://vimeo.com/1135647674/80f5dc9cec';
                        const videoId = '1135647674';
                        const videoHash = '80f5dc9cec';

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
                        <a href="#pricing" onclick="event.preventDefault(); document.querySelector('#pricing').scrollIntoView({ behavior: 'smooth' });" class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc ceu05 cuwvd cx2av">
                        Tenemos una sorpresa más 
                        <svg style="width: 20px; height: 20px; margin-left: 8px; vertical-align: middle;" viewBox="0 0 24 24" fill="currentColor">
                            <style>
                                @keyframes ikimoPulse {
                                    0%,100% { transform: scale(1); }
                                    50% { transform: scale(1.3); }
                                }
                                .pulse { animation: ikimoPulse 1.2s ease-in-out infinite; transform-origin: 50% 50%; }
                            </style>
                            <path class="pulse" d="M7 10l5 5 5-5z"/>
                        </svg>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .pricing-bg {
        background-image:
            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url('<?= base_url('assets/images/bg/bg_challenge.png') ?>');
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
            <div class="c7bf6 c90dr c1nzj">
                <div
                    class="ckmmd cnsl6 c0u5w chuib czlz1 c93x7 cpodb cqmuf c4sxq cjnt3 c0dcb cuq1a c25pz c2gzf">
                    <span class="cjdx7 cmgwh csuc4 ctbdc cgrvg c4sxq">Comparte este enlace</span>
                </div>
                <h2 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px cniu2">
                    IKIMO CHALLENGE
                </h2>
                <p class="cthiu cby5j" style="color:white">
                    Genera en tiempo record  $1240, $3750 o $6140 en 1 semana , 2 semanas o máximo 1 mes.
                </p>
                <div style="margin-top: 2rem; display: inline-flex; align-items: center; gap: 0.5rem; cursor: pointer;" onclick="copyToClipboard('https://www.elsecretodeikimo.info')">
                    <h3 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px cniu2" style="font-size: 1rem;margin: 0;color:white">
                        <a style="display: inline-flex; align-items: center;"> 
                            
                            <span>www.elsecretodeikimo.info</span>
                            <svg style="width: 20px; height: 20px; margin-left: 8px;" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/>
                            </svg>
                        </a>
                    </h3>
                </div>

                <script>
                    function copyToClipboard(text) {
                        navigator.clipboard.writeText(text).then(function() {
                            alert('¡Enlace copiado al portapapeles!');
                        }).catch(function(err) {
                            console.error('Error al copiar: ', err);
                            alert('No se pudo copiar el enlace');
                        });
                    }
                </script>
                 <a href="#prelaunch" onclick="event.preventDefault(); document.querySelector('#prelaunch').scrollIntoView({ behavior: 'smooth' });" class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc ceu05 cuwvd cx2av">
                        ¿Listo para el IKIMO CHALLENGE?
                        <svg style="width: 20px; height: 20px; margin-left: 8px; vertical-align: middle;" viewBox="0 0 24 24" fill="currentColor">
                            <style>
                                @keyframes ikimoPulse {
                                    0%,100% { transform: scale(1); }
                                    50% { transform: scale(1.3); }
                                }
                                .pulse { animation: ikimoPulse 1.2s ease-in-out infinite; transform-origin: 50% 50%; }
                            </style>
                            <path class="pulse" d="M7 10l5 5 5-5z"/>
                        </svg>
                    </a>
            </div>
        </div>
    </div>
</section>
<!-- 13 Bonos end-->
<!-- Pre lanzamiento -->
<section class="cklw9" id="prelaunch">
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
                    ENTRÉNATE ANTES QUE LOS DEMÁS Y ALCANZA TU MEJOR RANGO
                </h2>
                <p class="cthiu cby5j cqzei cxbbo">
                    Empieza a entrenarte con el Fundador y C.E.O.
                    Master Coach Benja Romero y proyecta tu rango al Diamante en 3 meses
                </p>
                <a href="https://chat.whatsapp.com/HmjzZYzBrICARiWxH6d6ZU"
                    class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc ceu05 cuwvd cx2av">
                    <svg style="width: 20px; height: 20px; margin-right: 8px; vertical-align: middle;" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.304-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Empezar entrenamiento 
                </a>
                <br/><br/>
                <p class="cthiu cby5j cqzei cxbbo" style="font-size: 0.8rem;">
                    <b>DIAMANTE</b><br/>
                    Rango Hatamoto (Abanderado del Shōgun)
                    Guardia de élite; misiones especiales y expansión clave.
                    Recibe: estandarte central + katana cruzada.
                    USD15,000 promedio mensual
                </p>
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