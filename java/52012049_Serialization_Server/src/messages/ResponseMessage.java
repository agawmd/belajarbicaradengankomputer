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
public class ResponseMessage implements Serializable {
    public 
        double 
            luas     = 0,
            keliling = 0;
    
    
    public String toString() {
        return "Keliling: " +String.format("%.2f", keliling) + " | Luas: " + String.format("%.2f", luas);
    }

}
