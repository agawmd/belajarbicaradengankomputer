/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package class_pack;

/**
 *
 * @author aga
 */
public class Price {
    double f,m,d, fac, bayar1, bayar2, bayar3;
    
    public Price(double f, double d, double m) {
        this.f=f;
        this.d=d;
        this.m=m;
    }
    
    public void getFac(double f, double d, double m) {
        fac=500000;
        f=14000000;
        d=7000000;
        m=7600000;
        
        bayar1 = fac * f;
        bayar2 = fac * d;
        bayar3 = fac * m;
        
        System.out.println("Hasil Pembayaran Pertama : "+bayar1+ "Hasil Pembayaran Kedua : "+bayar2+ "Hasil Pembayaran Ketiga : "+bayar3);
        
    }
    
}
