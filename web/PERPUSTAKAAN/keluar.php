<?php

session_start();
session_destroy();
header("location: index.html?msg=Keluar sebagai Admin Berhasil !");

?>
