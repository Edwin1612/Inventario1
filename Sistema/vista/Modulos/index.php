<?php
$stmt = Datos::countProductos();
$stmt2 = Datos::countCategorias();
$stmt3 = Datos::countUsuarios();
$stmt4 = Datos::counthistoriales();

//Se piden respectivamente las filas de todas las tablas y se returna en un array fetch

?>
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont-table bg-c-blue"></i>
                <div class="d-inline">
                    <h4>Sistema de Inventario</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i class="icofont icofont-home"></i>
                        </a>
                    </li>
                    </li>
                    <li class="breadcrumb-item"><a href="index.php?action=index">Inventario</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card widget-card-1">
            <div class="card-block-small">
                <i class="icofont icofont-brand-aliexpress bg-c-blue card1-icon"></i>
                <span class="text-c-blue f-w-600">Productos</span>
                <h4><?=$stmt["count(*)"]?></h4>
                <div>
                    <span class="f-left m-t-10 text-muted">
                        <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Articulos
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card widget-card-1">
            <div class="card-block-small">
                <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                <span class="text-c-pink f-w-600">Categorias</span>
                <h4><?=$stmt2["count(*)"]?></h4>
                <div>
                    <span class="f-left m-t-10 text-muted">
                        <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Lineas de productos
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card widget-card-1">
            <div class="card-block-small">
                <i class="icofont icofont-ui-user-group bg-c-green card1-icon"></i>
                <span class="text-c-green f-w-600">Usuarios</span>
                <h4><?=$stmt3["count(*)"]?></h4>
                <div>
                    <span class="f-left m-t-10 text-muted">
                        <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Personal
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card widget-card-1">
            <div class="card-block-small">
                <i class="icofont icofont-calculator-alt-2 bg-c-yellow card1-icon"></i>
                <span class="text-c-yellow f-w-600">Movimientos</span>
                <h4><?=$stmt4["count(*)"]?></h4>
                <div>
                    <span class="f-left m-t-10 text-muted">
                        <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Historiales
                    </span>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


