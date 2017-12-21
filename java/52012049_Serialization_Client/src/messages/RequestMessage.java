/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package messages;

import java.io.Serializable;

/**
 *
 * @author BzKurozaki
 */
public class RequestMessage implements Serializable {
    public 
        double 
            panjang = 0, 
            lebar = 0;
    
    public String toString() {
        return "Panjang: " +String.format("%.2f", panjang) + " | Lebar: " + String.format("%.2f", lebar);
    }
}
