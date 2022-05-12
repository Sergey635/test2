<?php
    require_once '../app/db_connection.php';

    $flour = $_POST['flour'];
    $potato = $_POST['potato'];
    $margarine = $_POST['margarine'];
    $onion = $_POST['onion'];
    $olis = $_POST['olis'];
    $light = $_POST['light'];
    $finish_price = $_POST['finish_price'];
    $created_date = date("Y-m-d H:i:s");
    mysqli_query($connection, "INSERT INTO `for_potatos` (`id`, `flour`, `potato`, `margarine`, `onion`, `olis`, `light`, `finish_price`, `date`) 
VALUES (NULL, '$flour', '$potato', '$margarine', '$onion', '$olis', '$light', '$finish_price', '$created_date')");

    header('Location:/');
