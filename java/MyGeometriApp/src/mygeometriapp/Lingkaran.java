/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mygeometriapp;

/**
 *
 * @author aga
 */
public class Lingkaran {
    private double jari;
    
    public Lingkaran(String jari) {
        
        this.jari=Double.parseDouble(jari);
    }
    
    public double getLuas() {
        return(jari*jari*3.14);
    }
}
