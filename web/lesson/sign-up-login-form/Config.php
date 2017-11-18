<?php

    $host   = "localhost";
    $user   = "root";
    $pass   = "1234";
    $db     = "db_kampus";
    
    $sql    = mysqli_connect($host, $user, $pass, $db) or die("Database tidak ditemukan");