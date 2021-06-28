<ul>
    <li><a href="categorias.php">Categorias</a></li>
    <li><a href="productos_add.php">Productos</a></li>
</ul>

<?php
    include_once("../AddOrEdit.php");

    // Array de informacion editable
    // $data = getEditableData($_GET['id']);
?>

<form action="" method="post">
    Nombre:<input type="text" name="nombre" value="<?php echo isset($dato)?$dato['nombre']:''?>"><br />
    <input type="submit">
    <input type="hidden" name="tabla" value="categorias">
</form>