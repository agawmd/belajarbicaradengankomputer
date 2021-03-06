<?php
/**
 * Import Section
 */
require_once __DIR__.'/class.nilai.php';
/**
 * End of Import Section
 */


/**
 * CLASS Nilai SI
 * Class ini diuntukkan untuk menghitung nilai dengan prodi TI
 */
class NilaiSI extends Nilai {    

    
    /**
     * Constructor CLass Nilai SI
     */
    public function __construct ($a, $t, $k, $m, $f) {
        $this->absen = $a;
        $this->tugas = $t;
        $this->kuis  = $k;
        $this->mid   = $m;
        $this->final = $f;
    }


    /**
     * Method untuk mendapatkan Index Huruf dari Nilai
     */
    public function huruf($n) {
        if ($n >= 80.0) {
            $huruf = 'A';
        } 
        else if ($n >= 60.0) {
            $huruf = 'B';
        } 
        else if ($n >= 40.0) {
            $huruf = 'C';
        } 
        else if ($n >= 20.0) {
            $huruf = 'D';
        } 
        else {
            $huruf = 'E';
        }
        return $huruf;    
    }


    /**
     * Method untuk mendapatkan status dari Nilai
     */
    public function status($s) {
        if ($s >= 80.0) {
            $status = 'LULUS';
        } 
        else if ($s >= 60.0) {
            $status = 'BAGUS';
        } 
        else if ($s >= 40.0) {
            $status = 'CUKUP';
        } 
        else if ($s >= 20.0) {
            $status = 'PARAH';
        } 
        else {
            $status = 'ERROR';
        }

        return $status; 
    }


    /**
     * Method untuk menghitung nilai IP
     */
    public function getIP() {
        return ($this->kuis + $this->mid + $this->tugas + $this->final + $this->absen) /5;
    }
}
/**
 * End Of CLASS Nilai SI
 */
