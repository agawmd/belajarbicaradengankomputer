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
public class Lingkaran extends Geometri {
    double r;
    
    public void setJari2(double r) {
        this.r=r;
    }
    double hitungLuas() {
        return(r*r*3.14);
    }
}
