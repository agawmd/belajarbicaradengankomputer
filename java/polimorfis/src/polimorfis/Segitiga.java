/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package polimorfis;

/**
 *
 * @author aga
 */
public class Segitiga extends Geometri{
    double alas, tinggi;
    
    @Override
    public double getLuas() {
        return(alas*tinggi*0.5);
    }
    
}
