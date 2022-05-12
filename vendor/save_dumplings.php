<?php
    require_once '../app/db_connection.php';

    $flour = $_POST['flour'];
    $margarine = $_POST['margarine'];
    $light = $_POST['light'];
    $finish_price = $_POST['finish_price'];
    $created_date = date("Y-m-d H:i:s");
    mysqli_query($connection, "INSERT INTO `for_dumplings` (`id`, `flour`, `margarine`,`light`, `finish_price`, `date`) 
VALUES (NULL, '$flour', '$margarine', '$light', '$finish_price', '$created_date')");

    header('Location:/');
