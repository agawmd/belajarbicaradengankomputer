<?php

class geometri {

    function persegi($n) {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

    function segitiga($n) {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

}

/**
 * Nama:x 
 * nilai: 3
 * tbl:persegi
 * 
 * 
 * -> Nama ku x
 * -> *
 * -> **
 * -> ***
 * 
 * jawaban saya: salah
 * seharusnya jawabannya:
 *  
 *  > ***
 *  > ***
 *  > ***
 * 
 * dan jawaban saya: salah
 * dan seharusnya jawabannnya:
 * 
 * > Nama ku x
 * > ***
 * > ***
 * > ***
 * dan jawaban saya setelah menjawab 2 kali adalah: benar
 * 
 * 
 * =======================================
 * nama: 
 * nilai: 3
 * tbl: persegi
 * 
 * > *
 * > **
 * > ***
 * 
 * jawaban saya : salah
 * 
 * seharusnya jawabanya:
 * > ***
 * > ***
 * > ***
 * dan jawaban saya: salah
 * dan seharusnya jawabannya adalah
 * 
 * 
 * kosong
 * 
 * 
 * dan jawaban saya setelah menjawab 2 kali adalah: salah
 * 
 * 
 * 
 * kosong
 * 
 * dan jawaban saya setelah salah 2 kali adalah: benar
 * 
 * =======================================
 * nama:x 
 * nilai: 3
 * tbl: segitiga
 * 
 * > Nama ku x
 * > ***
 * > ***
 * > ***
 * > *
 * > **
 * > ***
 * 
 * jawaban saya: benar
 * =======================================
 * nama: 
 * nilai: 3
 * tbl: segitiga
 * 
 * > *
 * > **
 * > ***
 * 
 * jawaban saya: benar
 * 
 * 
 * 
 * 
 * 
 * Nilai saya malam ini : 75
 * 
 * Ujian: 50    benar 2 dari 4 soal
 * REM_1: 50    benar 2 dari 4 soal 
 * REM_2: 75    benar 3 dari 4 soal
 * REM_3: 100   benar 4 dari 4 soal
 * -------[275] /400
 *        68.75
 * 
 * 
 * 
 * contoh segitiga terbalik:
 * n=3
 * ***
 * **
 * *
 * 
 * n=5
 * *****
 * ****
 * ***
 * **
 * *
 */
if (isset($_POST['nilai']) && !empty($_POST['nilai'])) {
    $n = $_POST['nilai'];
    $geo = new geometri();


    if (isset($_POST['nama']) && !empty($_POST['nama'])) {
        $na = $_POST['nama'];
        echo "Nama ku $na<br>";
        $geo->persegi($n);
    }

    if (isset($_POST['segitiga'])) {
        $geo->segitiga($n);
    }
} else {
    echo "masukan ki dlu nilainya boss....";
}



















