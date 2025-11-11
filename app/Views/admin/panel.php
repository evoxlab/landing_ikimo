<?= $this->extend('layout_admin') ?>

<?= $this->section('title') ?>
ADMIN | El secreto de Ikimo
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Panel Area Start Here -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Tablero</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a>Panel General</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">
                            <!-- Total Clients-->
                            <div class="col-md-6 col-xl-3">
                                <div class="card theme-bg bitcoin-wallet" style="border-radius: 15px;">
                                    <div class="card-block">
                                        <h5 class="text-white mb-2">Total de Registros</h5>
                                        <h2 class="text-white mb-2 f-w-300"><?php echo $totalClients; ?></h2>
                                        <span class="d-block">
                                            <a class="text-white" href="<?php echo base_url("dashboard/clientes");?>"><b>Ver</b></a>
                                        </span>
                                        <i class="fa fa-users f-70 fa-4x text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Total Users-->
                            <div class="col-md-6 col-xl-3">
                                <div class="card theme-bg bitcoin-wallet" style="border-radius: 15px;">
                                    <div class="card-block">
                                        <h5 class="text-white mb-2">Total de Usuarios</h5>
                                        <h2 class="text-white mb-2 f-w-300"><?php echo $totalUsers; ?></h2>
                                        <span class="d-block">
                                            <a class="text-white" href="<?php echo base_url("dashboard/usuarios"); ?>"><b>Ver</b></a>
                                        </span>
                                        <i class="fa fa-user fa-4x text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo site_url() . "assets/admin/js/script/panel.js"; ?>"></script>
<script src="<?= base_url('assets/js/home.js?1') ?>"></script>
<!-- Panel Area End Here  -->

<?= $this->endSection() ?>