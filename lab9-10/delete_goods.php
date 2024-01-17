<?php
session_start();
require ('connect.php');
$id = $_GET["id"];
        $stmt = $connect->query("DELETE FROM `goods` WHERE `goods`.`id` = $id");
            header('Location: admin1.php');
    
?>