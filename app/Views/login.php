<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Administración
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- login Area Start Here  -->
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
                    <span class="cjdx7 cmgwh csuc4 ctbdc cgrvg c4sxq">Bienvenido Administrador</span>
                </div>
                <div class="">
                    <!-- Contact form -->
                    <form name="form" id="form" class="c1nzj" onsubmit="login()" action="javascript:void(0)" enctype="multipart/form-data" method="post">
                        <div class="cjc8o">
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="email" style="text-align: left;">Email</label>
                                <input id="email" name="email" type="email" class="c9vss cuwvd" placeholder="email@ejemplo.com" required="">
                            </div>
                           
                            <div>
                                <label class="cthiu c25fq c3e84 cqxme cjpk5" for="password" style="text-align: left;">Contraseña</label>
                                <input id="password" name="password" type="password" class="c9vss cuwvd" placeholder="********" required="">
                            </div>
                        </div>
                        <div class="cjc8o caswb">
                            <button id="submit" class="cjfft c3wrs ctuu0 ccs84 cbip1 csjfu ch2pc ceu05 cuwvd cx2av">
                                Ingresar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login Area End Here  -->

<?= $this->endSection() ?>