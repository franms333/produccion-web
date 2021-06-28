<ul>
    <li><a href="categorias.php">Categorias</a></li>
    <li><a href="productos_add.php">Productos</a></li>
</ul>

<?php

include "../dataHelper.php";
include "../functions.php";

// Array asociativo del JSON de productos
$data = getDataFromJSON('productos');

// POST
if(isset($_POST['add'])){
    if(!empty($_GET['id'])){
        // Id del producto
        $id = $_GET['id'];

        // Array asociativo del JSON de productos
        $data = getDataFromJSON('productos');

        // Informacion del producto
        $producto = $data[$id];
    }
    else
    {
        // Generar nuevo Id de producto
        $id = date('Ymdhis');
    }

    $data[$id] = array('id'=>$id, 'nombre'=>$_POST['nombre'], 'precio'=>$_POST['precio']);
    setDataJSON('productos', $data);

    redirect('productos.php');
}

if(!empty($_GET['id'])){
    // Id del producto
    $id = $_GET['id'];

    // Informacion del producto
    $producto = $data[$id];
}

?>

<form action="" method="post">
    Nombre:<input type="text" name="nombre" value="<?php echo isset($producto) ? $producto['nombre'] : ''?>"><br />
    Precio:<input type="text" name="precio" value="<?php echo isset($producto) ? $producto['precio'] : ''?>"><br />
    <input type="submit" name="add">
    <!-- preguntar si es necesario poner en el submit el value=add-->
</form>