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
            <div class="c7bf6 c90dr c1nzj" style="padding-bottom: 5em;">
                <div
                    class="ckmmd cnsl6 c0u5w chuib czlz1 c93x7 cpodb cqmuf c4sxq cjnt3 c0dcb cuq1a c25pz c2gzf">
                    <span class="cjdx7 cmgwh csuc4 ctbdc cgrvg c4sxq">Comparte este enlace</span>
                </div>
                <h2 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px cniu2">
                    IKIMO CHALLENGE
                </h2>
                <p class="cthiu cby5j">
                    Genera en tiempo record  $1240, $3750 o $6140 en 1 semana , 2 semanas o máximo 1 mes.
                </p>
                <h3 class="cfmhn clkfy ca6xa cmgwh cndaf cgrvg cjy9f czenk cm3px cniu2" style="font-size: 1rem;margin-top: 2rem;color:white">
                    www.elsecretodeikimo.info
                </h3>
            </div>
        </div>
    </div>
</section>
<!-- 13 Bonos end-->
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
                    ENTRÉNATE ANTES QUE LOS DEMÁS Y ALCANZA TU MEJOR RANGO
                </h2>
                <p class="cthiu cby5j cqzei cxbbo">
                    Empieza a entrenarte con el Fundador y C.E.O.
                    Master Coach Benja Romero y proyecta tu rango al Diamante en 3 meses
                </p>
                <a href="https://app.mrcirp.com/ElSecretodeIkimo"
                    class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc ceu05 cuwvd cx2av">
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