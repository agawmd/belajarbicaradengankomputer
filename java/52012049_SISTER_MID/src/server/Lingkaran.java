/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package server;

/**
 *
 * @author aga
 */


public class Lingkaran extends Main {
    double r;
    
    public void setJari2(double jari) {
        this.r=jari;
    }
    
    double HitungLuas() {
        return(r*r*3.14);
    }
}
