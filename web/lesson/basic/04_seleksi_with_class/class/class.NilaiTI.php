<?php

/**
 * CLASS Nilai TI
 * Class ini diuntukkan untuk menghitung nilai dengan prodi TI
 */
class NilaiTI extends Nilai {
    /**
     * Method untuk mendapatkan Index Huruf dari Nilai
     */
    public function huruf($n) {
        if ($n >= 90.0) {
            $huruf = 'A';
        } 
        else if ($n >= 70.0) {
            $huruf = 'B';
        } 
        else if ($n >= 50.0) {
            $huruf = 'C';
        } 
        else if ($n >= 30.0) {
            $huruf = 'D';
        } 
        else if (30.0 > $n) {
            $huruf = 'E';
        }

        return $huruf;    
    }


    /**
     * Method untuk mendapatkan satus dari nilai
     */
    public function status($n) {
        if ($s >= 70.0) {
            $status = 'LULUS';
        } 
        else if (50.0 > $s) {
            $status = 'CUKUP';
        } 
        else {
            $status = 'PARAH';
        } 

        return $status; 
    }


    /**
     * Method untuk menghitung nilai IP
     */
    public function getIP() {
        return ($this->kuis + $this->mid + $this->tugas + $this->final) /4;
    }
}
/**
 * End of CLASS Nilai TI
 */