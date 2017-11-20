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
public class Segitiga extends Geometri{
    double alas,tinggi;
    
    public void setAlas(double a) {
        alas=a;
    }
    
    public void setTinggi(double t) {
        tinggi=t;
    }
    
    double hitungLuas() {
        return(alas*tinggi*0.5);
    }
    
    
    
}
