<?= $this->extend('layout_admin') ?>

<?= $this->section('title') ?>
Admin | Clientes
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Panel Area Start Here -->
<style>
    /* Opción 1: Aumentar por ID */
    #i_country {
        /* Por defecto, un texto puede tener 16px. Aquí lo triplicamos. */
        font-size: 30px;
        /* También puedes usar unidades relativas como 'em' o 'rem' */
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
                                    <h5 class="m-b-10">Arbol en Red</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard/">Panel</a></li>
                                    <li class="breadcrumb-item"><a>Estructura</a></li>
                                </ul>
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
                                        <form name="form" method="post" action="<?php echo site_url() . "dashboard/reportes_clientes"; ?>">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h5>Estructura: <b><?php echo $obj_customer['code']; ?></b></h5>
                                                </div>
                                                <div class="col-md-8"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <style>
                                        #modal-content-structure {
                                            border-radius: 15px;
                                        }

                                        .img-customer-structure {
                                            border-radius: 5px;
                                        }

                                        .tree * {
                                            margin: 0;
                                            padding: 0;
                                        }

                                        .tree {
                                            margin: 0 auto;
                                        }

                                        .zoomViewport {
                                            width: 100%;
                                        }

                                        .zoomContainer {
                                            margin: 0 auto;
                                        }

                                        .tree ul {
                                            padding-top: 20px !important;
                                            position: relative !important;
                                        }

                                        .tree li {
                                            float: left !important;
                                            text-align: center !important;
                                            list-style-type: none !important;
                                            position: relative !important;
                                            padding: 10px 0px 0px 1px !important;
                                            transition: all 0.5s !important;
                                            -webkit-transition: all 0.5s !important;
                                            -moz-transition: all 0.5s !important;
                                        }

                                        /*We will use ::before and ::after to draw the connectors*/

                                        .tree li::before,
                                        .tree li::after {
                                            content: '';
                                            position: absolute !important;
                                            top: 0 !important;
                                            right: 50% !important;
                                            border-top: 1px solid #a5a5a5 !important;
                                            width: 50% !important;
                                            height: 20px !important;
                                        }

                                        .tree li::after {
                                            right: auto !important;
                                            left: 50% !important;
                                            border-left: 1px solid #a5a5a5 !important;
                                        }

                                        /*We need to remove left-right connectors from elements without
                                            any siblings*/
                                        .tree li:only-child::after,
                                        .tree li:only-child::before {
                                            display: none !important;
                                        }

                                        /*Remove space from the top of single children*/
                                        .tree li:only-child {
                                            padding-top: 0 !important;
                                        }

                                        /*Remove left connector from first child and
                                        right connector from last child*/
                                        .tree li:first-child::before,
                                        .tree li:last-child::after {
                                            border: 0 none !important;
                                        }

                                        /*Adding back the vertical connector to the last nodes*/
                                        .tree li:last-child::before {
                                            border-right: 1px solid #a5a5a5 !important;
                                            border-radius: 0 5px 0 0 !important;
                                            -webkit-border-radius: 0 5px 0 0 !important;
                                            -moz-border-radius: 0 5px 0 0 !important;
                                        }

                                        .tree li:first-child::after {
                                            border-radius: 5px 0 0 0 !important;
                                            -webkit-border-radius: 5px 0 0 0 !important;
                                            -moz-border-radius: 5px 0 0 0 !important;
                                        }

                                        /*Time to add downward connectors from parents*/
                                        .tree ul ul::before {
                                            content: '';
                                            position: absolute !important;
                                            top: 0 !important;
                                            left: 50% !important;
                                            border-left: 1px solid #a5a5a5 !important;
                                            width: 0 !important;
                                            height: 20px !important;
                                        }

                                        .tree li a {
                                            text-decoration: none !important;
                                            color: #000 !important;
                                            font-weight: 600 !important;
                                            display: inline-block !important;
                                            border-radius: 5px !important;
                                            -webkit-border-radius: 5px !important;
                                            -moz-border-radius: 5px !important;

                                            transition: all 0.5s !important;
                                            -webkit-transition: all 0.5s !important;
                                            -moz-transition: all 0.5s !important;
                                        }

                                        .card-structure {
                                            box-shadow: none !important;
                                            border: none !important;
                                        }
                                    </style>
                                    <!-- end filter -->
                                    <div class="card-block">
                                        <div class="card-body">
                                            <div role="toolbar" class="btn-toolbar d-flex">
                                                <div class="p-1 input-group">
                                                    <div class="input-group-append">
                                                        <a title="inicio" href="<?php echo site_url() . "dashboard/estructura"; ?>" type="submit" class="btn btn-dark" style="color:white;border-radius:5px 0px 0px 5px;"><i class="fa fa-home"></i></a>
                                                        <a title="regresar" href="javascript:history.back()" type="submit" class="btn btn-dark" style="color:white;"><i class="fa fa-undo"></i></a>
                                                        <a title="subir" id="up" onclick="up('<?php echo $id; ?>');" class="btn btn-dark" style="color:white;"><i class="fa fa-chevron-up"></i></a>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-grow-1 justify-content-end p-1">
                                                    <?php
                                                    $data = array();
                                                    foreach ($obj_customer_button_search as $value) {
                                                        $data[] = array(
                                                            'label'     =>  $value['code'] . " (" . $value['name'] . " " . $value['lastname'] . ")",
                                                            'value'     =>  $value['id']
                                                        );
                                                    }
                                                    ?>
                                                    <form method="post" action="<?php echo site_url() . "dashboard/estructura"; ?>" class="form-inline my-2 my-lg-0">
                                                        <div class="p-1 input-group">
                                                            <div class="input-group-append">
                                                                <input type="search" class="form-control search-customer" id="search" name="search" placeholder="Buscar Usuario" aria-label="Search" required>
                                                                <button type="submit" title="Buscar" class="btn btn-dark" style="color:white;"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Color personalizado más oscuro que GOLD -->
                                    <div class="row">
                                        <div class="col-md-12 col-xl-12">
                                            <div class="element-box" style="overflow-x: scroll;">
                                                <div class="tree" style="padding: 0px !important;width:max-content">
                                                    <div class="card card-structure widget">
                                                        <ul class="arvore" style="padding-bottom: 80px">
                                                            <li>
                                                                <div>
                                                                    <!------------->
                                                                    <!--//NIVEL 1-->
                                                                    <!------------->
                                                                    <ul class="init" style="padding-top: 0px !important;">
                                                                        <li>
                                                                            <!-- Meu Usuario -->
                                                                            <a href="javascript:void(0);">
                                                                                <div id="level-0">
                                                                                    <img src='<?php echo base_url("assets/admin/img/300-1.jpg"); ?>' alt="avatar" class="img-responsive symbol symbol-30px symbol-md-40px img-customer-structure" style="width: 40px;" onerror='this.onerror=null; this.src="<?php echo base_url("assets/admin/img/300-1.jpg"); ?>"'>
                                                                                </div>
                                                                            </a>
                                                                            <br />
                                                                            <?php
                                                                            $color = 'green';
                                                                            $style = "btn-light-success";
                                                                            ?>
                                                                            <a style="color:<?php echo $color; ?>!important;font-size: 10px;" class="btn btn-sm fs-9 py-1 px-1" href="#" onclick="show_info('<?php echo $obj_customer['name']; ?>', '<?php echo $obj_customer['lastname']; ?>', '<?php echo $obj_customer['email']; ?>','<?php echo $obj_customer['code']; ?>','<?php echo $obj_customer['country']; ?>');" data-bs-toggle="modal" data-bs-target="#kt_modal_info"><?php echo $obj_customer['name']; ?><br /><?php echo $obj_customer['lastname']; ?></a>
                                                                            <!------------->
                                                                            <!--//NIVEL 2-->
                                                                            <!------------->
                                                                            <?php if (count($obj_customer_n2) > 0) { ?>
                                                                                <ul>
                                                                                    <?php foreach ($obj_customer_n2 as $value) {
                                                                                    ?>
                                                                                        <li>
                                                                                            <form method="post" action="<?php echo site_url() . "dashboard/estructura"; ?>" class="w-100">
                                                                                                <input type="hidden" id="search" name="search" value="<?php echo $value->code; ?> (<?php echo $value->name; ?><?php echo $value->lastname; ?>)">
                                                                                                <button onclick="up('<?php echo $value->id; ?>');" style="background-color: white;border: none;">
                                                                                                    <div id="level-1">
                                                                                                        <img loading="lazy" src='<?php echo base_url("assets/admin/img/300-1.jpg"); ?>' alt="avatar" class="img-responsive symbol symbol-30px symbol-md-40px img-customer-structure" style="width: 40px;" onerror='this.onerror=null; this.src="<?php echo base_url("assets/admin/img/300-1.jpg"); ?>"'>
                                                                                                    </div>
                                                                                                </button>
                                                                                            </form>

                                                                                            <?php
                                                                                            $color = 'green';
                                                                                            $style = "btn-light-success";
                                                                                            ?>
                                                                                            <a href="#" style="color:<?php echo $color; ?> !important;font-size: 10px;" class="btn btn-sm fs-9 py-1 px-1" onclick="show_info('<?php echo $value->name; ?>', '<?php echo $value->lastname; ?>', '<?php echo $value->email; ?>', '<?php echo $value->code; ?>', '<?php echo $value->country; ?>');" data-bs-toggle="modal" data-bs-target="#kt_modal_info"><?php echo $value->name; ?><br /><?php echo $value->lastname; ?></a>
                                                                                            <!------------->
                                                                                            <!--//NIVEL 3-->
                                                                                            <!------------->
                                                                                            <?php if (count($obj_customer_n3) > 0) {
                                                                                            ?>
                                                                                                <ul class="d-sm-block">
                                                                                                    <?php foreach ($obj_customer_n3 as $value3) { ?>
                                                                                                        <?php if ($value->id == $value3->sponsor_id) { ?>
                                                                                                            <li>
                                                                                                                <form method="post" action="<?php echo site_url() . "dashboard/estructura"; ?>" class="w-100">
                                                                                                                    <input type="hidden" id="search" name="search" value="<?php echo $value3->code; ?> (<?php echo $value3->name; ?><?php echo $value3->lastname; ?>)">
                                                                                                                    <button type="submit" style="background-color: white;border: none;">
                                                                                                                        <div id="level-3">
                                                                                                                            <img src='<?php echo base_url("assets/admin/img/300-1.jpg"); ?>' alt="avatar" class="img-responsive symbol symbol-30px symbol-md-40px img-customer-structure" style="width: 40px;" onerror='this.onerror=null; this.src="<?php echo base_url("assets/admin/img/300-1.jpg"); ?>"'>
                                                                                                                        </div>
                                                                                                                    </button>
                                                                                                                </form>
                                                                                                                <?php
                                                                                                                $color = 'green';
                                                                                                                $style = "btn-light-success";
                                                                                                                ?>
                                                                                                                <a href="#" style="color:<?php echo $color; ?> !important;font-size: 10px;" class="btn btn-sm fs-9 py-1 px-1" onclick="show_info('<?php echo $value3->name; ?>', '<?php echo $value3->lastname; ?>', '<?php echo $value3->email; ?>', '<?php echo $value3->code; ?>', '<?php echo $value3->country; ?>');" data-bs-toggle="modal" data-bs-target="#kt_modal_info"><?php echo $value3->name; ?><br /><?php echo $value3->lastname; ?></a>
                                                                                                                <!------------->
                                                                                                                <!--//NIVEL 4-->
                                                                                                                <!------------->
                                                                                                                <?php if (count($obj_customer_n4) > 0) { ?>
                                                                                                                    <ul class="d-sm-block">
                                                                                                                        <?php foreach ($obj_customer_n4 as $value4) { ?>
                                                                                                                            <?php if ($value3->id == $value4->sponsor_id) { ?>
                                                                                                                                <li>
                                                                                                                                    <form method="post" action="<?php echo site_url() . "dashboard/estructura"; ?>" class="w-100">
                                                                                                                                        <input type="hidden" id="search" name="search" value="<?php echo $value4->code; ?> (<?php echo $value4->name; ?><?php echo $value4->lastname; ?>)">
                                                                                                                                        <button type="submit" style="background-color: white;border: none;">
                                                                                                                                            <div id="level-4">
                                                                                                                                                <img src='<?php echo base_url("assets/admin/img/300-1.jpg"); ?>' alt="avatar" class="img-responsive symbol symbol-30px symbol-md-40px img-customer-structure" style="width: 40px;" onerror='this.onerror=null; this.src="<?php echo base_url("assets/admin/img/300-1.jpg"); ?>"'>
                                                                                                                                            </div>
                                                                                                                                        </button>
                                                                                                                                    </form>
                                                                                                                                    <?php
                                                                                                                                    $color = 'green';
                                                                                                                                    $style = "btn-light-success";
                                                                                                                                    ?>
                                                                                                                                    <a href="#" style="color:<?php echo $color; ?> !important;font-size: 10px;" class="btn btn-sm fs-9 py-1 px-1" onclick="show_info('<?php echo $value4->name; ?>', '<?php echo $value4->lastname; ?>', '<?php echo $value4->email; ?>', '<?php echo $value4->code; ?>', '<?php echo $value4->country; ?>');" data-bs-toggle="modal" data-bs-target="#kt_modal_info"><?php echo $value4->name; ?><br /><?php echo $value4->lastname; ?></a>
                                                                                                                                </li>
                                                                                                                            <?php } ?>
                                                                                                                        <?php } ?>
                                                                                                                    </ul>
                                                                                                                <?php } ?>
                                                                                                            </li>
                                                                                                        <?php } ?>
                                                                                                    <?php } ?>
                                                                                                </ul>
                                                                                            <?php } ?>
                                                                                        </li>
                                                                                    <?php } ?>
                                                                                </ul>
                                                                            <?php } ?>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="kt_modal_info" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-750px">
                                            <div class="modal-content" id="modal-content-structure">
                                                <div class="modal-header pb-0 border-0 justify-content-end">
                                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                                    <form>
                                                        <div class="mb-20 text-center">
                                                            <h3 class="mb-3">Información de Socio</h3>
                                                            <div id="i_country"></div>
                                                        </div>
                                                        <div class="py-2 d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                <span>Nombres</span>
                                                            </label>
                                                            <input type="text" name="i_name" id="i_name" class="form-control form-control-solid" readonly>
                                                        </div>
                                                        <div class="py-2 d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                <span>Apellidos</span>
                                                            </label>
                                                            <input type="text" name="i_lastname" id="i_lastname" class="form-control form-control-solid" readonly>
                                                        </div>
                                                        <div class="py-2 d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                <span>Email</span>
                                                            </label>
                                                            <input type="text" name="i_email" id="i_email" class="form-control form-control-solid" readonly>
                                                        </div>
                                                        <div class="py-2 d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                <span>Código</span>
                                                            </label>
                                                            <input type="text" name="i_code" id="i_code" class="form-control form-control-solid" readonly>
                                                        </div>
                                                        <div class="py-2 d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                <span>Estado</span>
                                                            </label>
                                                            <div id="i_status"></div>
                                                        </div>
                                                    </form>
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

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
<script src="<?php echo base_url('assets/admin/js/estructure.js'); ?>"></script>
<script>
    var auto_complete = new Autocomplete(document.getElementById('search'), {
        data: <?php echo json_encode($data); ?>,
        maximumItems: 10,
        highlightTyped: true,
        highlightClass: 'fw-bold text-primary'
    });
</script>

<!-- Panel Area End Here  -->

<?= $this->endSection() ?>