/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rmi_final;

/**
 *
 * @author aga
 */

import java.rmi.*;
import java.rmi.server.*;

/**
 *
 * @author aga
 */
public class Hitung extends UnicastRemoteObject implements HitungInterface {

    private double a;
    private double b;
    private double c;
    
    Hitung() throws RemoteException {
        super();
    }
    
    public Hitung(double a, double b, double c) throws RemoteException{
        this.a = a;
        this.b = b;
        this.c = c;
        
    }
     public double Jumlah(double a, double b, double c) {
         return(a+b+c);
     }
     
     
     public double Kali(double a, double b, double c) {
         return(a*b*c);
     }
    
    
    
    
    
    public static void main(String[] args) {
        // TODO code application logic here
    }
    
}
