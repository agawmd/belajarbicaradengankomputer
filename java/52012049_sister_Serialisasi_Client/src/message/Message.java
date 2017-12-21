/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package message;

import java.io.Serializable;

/**
 *
 * @author aga
 */
public class Message implements Serializable{
    private Double a,b;
    
    public Message (Double x, Double y) {
        a=x;
        b=y;
    }

    public Message() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

}
