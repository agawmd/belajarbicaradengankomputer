/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mahasiswa;

import java.util.List;
import strukturdata.DataMahasiswa;

/**
 *
 * @author aga
 * @author BzKurozaki
 */
public class Mahasiswa {

    
    /**
     * Menimpan data mahasiswa
     * kemudian mengembalikan indikator keberhasilan
     * saat menyimpan data
     * 
     * @param   nim                 nim dari mahasiswa baru
     * @param   nama                nama dari mahasiswa baru
     * @param   prodi               prodi dari mahasiswa baru
     * @return  boolean
     */
    public boolean simpanData(String nim, String nama, String prodi) {
        boolean berhasil = false;
        
        // simpan data mahasiswa 
        // jika berhasil menyimpan data set variabel 'berhasil' menjadi 'true'
        // jika tidak berhasil menyimpan data set variabel 'berhasil' menjadi 'false'
        
        return berhasil;
    }

    
    /**
     * mengambil data mahasiswa berdasarkan nim
     * 
     * @param   nim                 nim mahasiswa
     * @return  DataMahasiswa       detail mahasiswa
     */
    public DataMahasiswa getData(String nim) {
        DataMahasiswa data = null;
        
        
        return data;
    }
    
    
    /**
     * mengambil semua data mahasiswa
     * 
     * @return  List<DataMahasiswa>     array dari data mahasiswa
     */
    public List<DataMahasiswa> getAllData() {
        List<DataMahasiswa> data = null;
        
        
        return data;
    }
}
