<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Administración
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- login Area Start Here  -->
<section class="ms-login-area pb-50 pt-130">
    <div class="container">
        <div class="ms-maxw-510 mx-auto">
            <div class="ms-login-wrap text-center ms-login-space ms-bg-2">
                <h3 class="ms-title4 mb-50">Bienvenido Administrador</h3>
                <form name="form" id="form" action="javascript:void(0);" enctype="multipart/form-data" method="post" class="ms-contact-form" onsubmit="login();">
                    <div class="ms-input2-box mb-25">
                        <input type="email" placeholder="Email" name="email" id="email" required>
                    </div>
                    <div class="ms-input2-box mb-50">
                        <input type="password" placeholder="Password" name="password" id="password" required>
                    </div>
                    <div class="ms-submit-btn mb-40">
                        <button class="unfill__btn d-block w-100" type="submit" id="submit">Ingresar</button>
                    </div>
                    <div class="ms-forget-pass">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- login Area End Here  -->

<?= $this->endSection() ?>