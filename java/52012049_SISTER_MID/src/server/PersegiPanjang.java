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



public class PersegiPanjang extends Main{
    double panjang,lebar;
    
    public void setPanjang(double p) {
        panjang=p;
    }
    
    public void setLebar(double l) {
        lebar=l;
    }
    
    double HitungLuas() {
        return(panjang*lebar);
    }    
}
