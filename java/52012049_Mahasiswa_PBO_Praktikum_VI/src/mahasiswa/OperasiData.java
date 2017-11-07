/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mahasiswa;

import java.io.IOException;
import java.io.*;

/**
 *
 * @author aga
 */
public class OperasiData {
    
    public void simpanData(Mahasiswa p) throws IOException {
        File f = new File("nilai_mahasiswa.dat");
        DataOutputStream out = new DataOutputStream(new FileOutputStream(,true));
        out.writeUTF(p.getNim());
        out.writeUTF(p.getNama());
        out.writeUTF(p.getProdi());
        out.close();
        
        
    }

    public void simpanData(Mahasiswa p) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}
