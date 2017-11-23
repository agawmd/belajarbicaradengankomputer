/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package manajer;

import server.Lingkaran;
import server.PersegiPanjang;



/**
 *
 * @author aga
 */
public class Manajer {
        Lingkaran m = new Lingkaran();
        PersegiPanjang c = new PersegiPanjang();
        
        m.setJari2(r);
        c.setPanjang(p);
        c.setLebar(l);
        
        System.out.println("Hasil Luas Lingkaran = "+m.HitungLuas());
        
        System.out.println("Hasil Luas Persegi Panjang = "+c.HitungLuas());
        
}
