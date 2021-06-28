<?php

include 'includes/header.php';

require_once __DIR__."/../../helpers/connection.php";

require_once __DIR__.'/../../DataAccess/CommentDAO.php';
require_once __DIR__.'/../../DataAccess/ProductDAO.php';
require_once __DIR__.'/../../DataAccess/CategoryDAO.php';
require_once __DIR__.'/../../DataAccess/BrandDao.php';

$comentarios = (new CommentDAO($con))->getAll();
$productos = (new ProductDAO($con))->getAll();
$categorias = (new CategoryDAO($con))->getAll();
$marcas = (new BrandDao($con))->getAll();

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Color System -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card bg-primary text-white shadow">
                <div class="card-body">
                    Productos
                    <div class="text-white-50 small"><?php echo count($productos)?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    Categorias
                    <div class="text-white-50 small"><?php echo count($categorias)?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-info text-white shadow">
                <div class="card-body">
                    Comentarios
                    <div class="text-white-50 small"><?php echo count($comentarios)?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-warning text-white shadow">
                <div class="card-body">
                    Marcas
                    <div class="text-white-50 small"><?php echo count($marcas)?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php include 'includes/footer.php'; ?>