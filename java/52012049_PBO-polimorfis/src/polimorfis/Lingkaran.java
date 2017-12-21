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


public class Lingkaran extends Geometri{
    
    double r;
    
    @Override
    public double getLuas() {
        return(r*r*3.14);
    }
}
