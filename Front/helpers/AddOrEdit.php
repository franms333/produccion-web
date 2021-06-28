<?php

require_once "../generateIdHelper.php";
require_once "../dataHelper.php";

if(isset($_POST['tabla']))
{
    // Nombre del archivo JSON
    $tabla = $_POST['tabla'];

    // Datos del archivo JSON convertido a Array
    $datosJson = getDataFromJSON($_POST['tabla']);

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = generateId();
    }

    $datosJson[$id] = array('id'=>$id, 'nombre'=>$_POST['nombre']);

    setDataJSON($_POST['tabla'], $datosJson);
}

if(isset($_GET['id'])){
    $dato = $datosJson[$_GET['id']];
}
?>


