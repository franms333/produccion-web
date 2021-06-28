<?php

include "../dataHelper.php";
include "../functions.php";

// Array asociativo del JSON de productos
$data = getDataFromJSON('productos');
?>

<style>
    .border{
        border: 1px solid lightcoral;
        color: black;
    }
</style>

<table class="border">
    <tr class="border">
        <th class="border">ID</th>
        <th class="border">Producto</th>
        <th class="border">Precio</th>
        <th class="border">Editar</th>
        <th class="border">Borrar</th>
    </tr>

    <?php foreach($data as $producto): ?>
    <tr class="border">
        <td class="border"><?php echo $producto['id'] ?></td>
        <td class="border"><?php echo $producto['nombre'] ?></td>
        <td class="border"><?php echo "$".number_format($producto['precio'], 2, ',', '.') ?></td>
        <td class="border"><a href="productos_add.php?id=<?php echo $producto['id'] ?>">EDIT</a></td>
        <td class="border"><a href="">DEL</a></td>
    </tr>
    <?php endforeach; ?>
</table>
