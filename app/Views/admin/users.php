<?= $this->extend('layout_admin') ?>

<?= $this->section('title') ?>
Admin | Usuarios
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Panel Area Start Here -->
<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Mantenimientos de Usurios</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard/">Panel</a></li>
                                    <li class="breadcrumb-item"><a>Usurios</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Sell Today-->
                    <div class="col-md-6 col-xl-3">
                        <div class="card theme-bg bitcoin-wallet" style="border-radius: 15px;">
                            <div class="card-block">
                                <h5 class="text-white mb-2">Total de Registros</h5>
                                <h2 class="text-white mb-2 f-w-300"><?php echo $totalUsers; ?></h2>
                                <i class="fa fa-user fa-4x text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="col-12 mb-3">
                                            <h5>Listado de Usuarios</h5>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-success" id="btn-export">
                                                Exportar Excel
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <div id="zero-configuration_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div id="zero-configuration_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th>ID</th>
                                                                                <th>Nombre</th>
                                                                                <th>E-mail</th>
                                                                                <th>Rol</th>
                                                                                <th>Estado</th>
                                                                                <th>Acciones</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php foreach ($users as $value) : ?>
                                                                                <tr>
                                                                                    <th><?php echo $value['id']; ?></th>
                                                                                    <td>
                                                                                        <h6><?php echo $value['name']; ?></h6>
                                                                                    </td>
                                                                                    <td><?php echo $value['email']; ?></td>
                                                                                    <td><?php echo $value['role']; ?></td>
                                                                                    <td>
                                                                                        <?php if ($value['is_active'] == 0) {
                                                                                            $valor = "No Activo";
                                                                                            $stilo = "label label-danger";
                                                                                        } else {
                                                                                            $valor = "Activo";
                                                                                            $stilo = "label label-success";
                                                                                        } ?>
                                                                                        <span class="rounded <?php echo $stilo; ?>"><?php echo $valor; ?></span>
                                                                                    </td>
                                                                                    <td>
                                                                                        <?php
                                                                                        if ($userData['role'] == "admin") {
                                                                                            $button_style = "";
                                                                                        } else {
                                                                                            $button_style = "disabled";
                                                                                        }
                                                                                        ?>
                                                                                        <div class="operation">
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn btn-icon btn-info" title="Editar" onclick="edit_customer('<?php echo $value['id']; ?>');"><i class="fa fa-edit"></i></button>
                                                                                                <button type="button" <?php echo $button_style; ?> class="btn btn-icon btn-danger" title="Eliminar" onclick="eliminar('<?php echo $value['id']; ?>');"><i class="fa fa-trash"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php endforeach; ?>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>Nombre</th>
                                                                                <th>E-mail</th>
                                                                                <th>Rol</th>
                                                                                <th>Estado</th>
                                                                                <th>Acciones</th>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const btnExport = document.getElementById("btn-export");
    const data = <?php echo json_encode($users); ?>;
    btnExport.addEventListener("click", () => {
        exportToExcel(data)
    })
</script>
<script lang="javascript" src="https://cdn.sheetjs.com/xlsx-0.20.0/package/dist/xlsx.full.min.js"></script>
<script src="<?= base_url('assets/admin/js/users.js') ?>"></script>

<!-- Panel Area End Here  -->

<?= $this->endSection() ?>