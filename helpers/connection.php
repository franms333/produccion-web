<?php

    require_once __DIR__."/../config/db.php";
    
    try {
        $con = new PDO("mysql:host=$dbhost;dbname=$db;port=$dbport", $dbuser, $dbpass);
    } catch (PDOException $error) {
        echo $error->getMessage();
        die();
    }
