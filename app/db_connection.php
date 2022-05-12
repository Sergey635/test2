<?php
 $connection = mysqli_connect('localhost', 'root', 'Sllt3rd_cs', 'home_db');
    if (!$connection) {
        die('Error db connection');
    }