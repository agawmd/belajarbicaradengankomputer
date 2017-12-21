/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abstraksi;

/**
 *
 * @author aga
 */
public class Abstraksi {

    public static void main(String[] args) {
        Lingkaran p = new Lingkaran();
        Segitiga q = new Segitiga();
        
        p.setJari2(2.0);
        q.setAlas(2.0);
        q.setTinggi(3.0);
        
        System.out.println("Luas Lingkaran = "+p.hitungLuas());
        System.out.println("Luas Segitiga = "+q.hitungLuas());
    }
    
}
