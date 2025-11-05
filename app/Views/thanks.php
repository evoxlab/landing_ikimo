<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Mega Evento Evangelístico en Pichari - Vraem | del 11 al 14 DIC     
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Banner Area Start Here  -->
<section class="ms-banner-area pt-60 p-relative">
    <a class="ms-scroll-down" href="#">DESPLAZARSE HACIA ABAJO</a>
    <div class="container-fluid ms-maw-1710">
        <div class="ms-br-30 mx-auto include__bg z-index-1 ms-overlay-1 p-relative"
            data-background="<?= base_url('assets/img/banner/banner-thumb-01.jpg');?>">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="ms-banner__main-wrapper">
                            <div class="ms-banner__content text-center">
                                <h1 class="ms-banner__bg-title"
                                    data-background="<?= base_url('assets/img/banner/title-bg.jpg') ?>">
                                    Gracias
                                </h1>
                                <h2 class="ms-banner__title msg_title bd-title-anim">
                                    Tu lugar ha sido reservado. 
                                </h2>
                                <p class="ms-banner__text" style="text-transform: none;">
                                    Participa en nuestra breve encuesta (la encontrarás justo debajo) para contarnos qué Predicadores y Ministerios de Alabanza te gustaría ver en nuestro próximo evento.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End Here  -->
 <!-- Contact area start -->
<section class="ms-contact-area pb-60 pt-130" id="contact">
    <div class="container">
        <div class="row align-items-end mb-25 bdFadeUp">
            <div class="col-lg-12">
                <div class="section__title-wrapper mb-40 bd-title-anim">
                    <span class="section__subtitle">Diseña el Próximo Evento: ¡Queremos Escucharte!</span>
                    <div id="msg-title">
                        <h2 class="section__title">
                            Encuesta Rápida
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="ms-contact-wrap ms-contact-space mb-70 ms-bg-2">
                    <form name="form" id="form" action="javascript:void(0);" enctype="multipart/form-data" method="post" class="ms-contact-form" onsubmit="survey();">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ms-input2-box mb-30">
                                    <input type="text" name="preacher" id="preacher" placeholder="¿Qué predicador te gustaría ver invitado en nuestro próximo evento?" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ms-input2-box mb-30">
                                    <input type="text" name="ministry_music" id="ministry_music" placeholder="¿Qué ministerio de alabanza nos sugieres invitar en el próximo evento?" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ms-submit-btn mt-20" style="text-align: center;">
                                    <button id="submit" class="unfill__btn" type="submit">Enviar Encuesta</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area Start Here  -->

<?= $this->endSection() ?>