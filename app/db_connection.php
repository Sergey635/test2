<?php
 $connection = mysqli_connect('localhost', 'root', 'root', 'home_db');
    if (!$connection) {
        die('Error db connection');
    }
