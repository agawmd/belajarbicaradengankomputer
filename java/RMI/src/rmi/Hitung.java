/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rmi;

/**
 *
 * @author aga
 */

import java.rmi.*;
import java.rmi.server.*;


public class Hitung extends UnicastRemoteObject implements HitungInterface {

    private double a;
    private double b;
    
    Hitung() throws RemoteException {
        super();
    }
    
    public Hitung(double a, double b) throws RemoteException{
        this.a = a;
        this.b = b;
        
    }
     public double Jumlah(double a, double b) {
         return(a+b);
     }
     
     
     public double Kali(double a, double b) {
         return(a*b);
     }     
    
    
    
    
    
    public static void main(String[] args) {
        // TODO code application logic here
    }
    
}
