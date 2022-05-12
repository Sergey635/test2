<?php
    require_once '../app/db_connection.php';

    $flour = $_POST['flour'];
    $cheese = $_POST['cheese'];
    $margarine = $_POST['margarine'];
    $eggs = $_POST['eggs'];
    $light = $_POST['light'];
    $finish_price = $_POST['finish_price'];
    $created_date = date("Y-m-d H:i:s");
    mysqli_query($connection, "INSERT INTO `for_cheese` (`id`, `flour`, `cheese`, `margarine`, `eggs`, `light`, `finish_price`, `date`) 
VALUES (NULL, '$flour', '$cheese', '$margarine', '$eggs', '$light', '$finish_price', '$created_date')");

    header('Location:/');
