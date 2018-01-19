/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Message;

import java.io.Serializable;

/**
 *
 * @author kiyoshi
 */
public class Message implements Serializable{
    
    private double a;
    private double b;
    private double c;
    
    public Message(double a,double b,double c){
        this.a=a;
        this.b=b;
        this.c=c;
        
    }
    public double getA(){
        return(a);
    }
    
    public double getB(){
        return(b);
    }
    
    public double getC(){
        return(c);
    }   
}
