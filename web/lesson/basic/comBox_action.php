<?php

if (isset($_POST['ini'])) {
    $anu    = $_POST['pilih'];
}

if ($anu == "Satu") {
    echo "Pertama";
} elseif ($anu == "Dua") {
    echo "Kedua";
}