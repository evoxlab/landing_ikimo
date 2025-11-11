<?= $this->extend('layout_admin') ?>

<?= $this->section('title') ?>
Admin | Clientes
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Panel Area Start Here -->

<?php
/**
 * Convierte el código de dos letras (ISO 3166-1 alpha-2) 
 * en la representación de emoji de la bandera.
 */
function getFlagEmoji($countryCode) {
    // Convierte el código a mayúsculas
    $countryCode = strtoupper($countryCode);

    // Itera sobre cada carácter para generar el código de emoji
    $codePoints = array_map(function($char) {
        // 127397 es el offset de la 'A' regional indicator symbol
        return 127397 + ord($char); 
    }, str_split($countryCode));

    // Convierte los códigos de punto a caracteres UTF-8
    $emoji = '';
    foreach ($codePoints as $point) {
        // Esto genera el caracter de emoji a partir del código de punto
        $emoji .= mb_convert_encoding("&#{$point};", 'UTF-8', 'HTML-ENTITIES');
    }

    return $emoji;
}
?>
<style>
    .flag-emoji {
        font-size: 24px; /* Ajusta el tamaño según sea necesario */
        line-height: 1; /* Asegura que la línea no afecte la alineación */
    }
</style>

<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Mantenimientos de Clientes</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard/">Panel</a></li>
                                    <li class="breadcrumb-item"><a>Clientes</a></li>
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
                                <h2 class="text-white mb-2 f-w-300"><?php echo $totalClients; ?></h2>
                                <i class="fa fa-users f-70 fa-4x text-white"></i>
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
                                            <h5>Listado de Clientes</h5>
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
                                                                                <th>Nombres</th>
                                                                                <th>Apellidos</th>
                                                                                <th>Código</th>
                                                                                <th>Teléfono</th>
                                                                                <th>E-mail</th>
                                                                                <th>País</th>
                                                                                <th>Sponsor</th>
                                                                                <th>Cód. Sponsor</th>
                                                                                <th>Acciones</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php foreach ($clients as $value) : ?>
                                                                                <tr>
                                                                                    <th><?php echo $value['id']; ?></th>
                                                                                    <td>
                                                                                        <h6><?php echo $value['name']; ?></h6>
                                                                                    </td>
                                                                                    <td><?php echo $value['lastname']; ?></td>
                                                                                    <td><?php echo $value['code']; ?></td>
                                                                                    <td><?php echo $value['phone']; ?></td>
                                                                                    <td><?php echo $value['email']; ?></td>
                                                                                    <td>
                                                                                        <span class="flag-emoji"><?php echo getFlagEmoji($value['country']); ?></span>
                                                                                    </td>
                                                                                    <td><?php echo $value['sponsor_name']; ?></td>
                                                                                    <td><?php echo $value['sponsor_code']; ?></td>
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
                                                                                <th>Nombres</th>
                                                                                <th>Apellidos</th>
                                                                                <th>Código</th>
                                                                                <th>Teléfono</th>
                                                                                <th>E-mail</th>
                                                                                <th>País</th>
                                                                                <th>Sponsor</th>
                                                                                <th>Cód. Sponsor</th>
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
    const data = <?php echo json_encode($clients); ?>;
    btnExport.addEventListener("click", () => {
        exportToExcel(data)
    })
</script>
<script lang="javascript" src="https://cdn.sheetjs.com/xlsx-0.20.0/package/dist/xlsx.full.min.js"></script>
<script src="<?= base_url('assets/admin/js/clients.js') ?>"></script>

<!-- Panel Area End Here  -->

<?= $this->endSection() ?>