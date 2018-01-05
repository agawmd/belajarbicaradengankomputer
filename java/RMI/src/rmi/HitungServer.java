/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rmi;



import java.rmi.*;
import java.rmi.registry.*;
import rmi.Hitung;



/**
 *
 * @author aga
 */

public class HitungServer {
    
    

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        try {
            Registry r = java.rmi.registry.LocateRegistry.createRegistry(5000);
            r.rebind("Hitung", new Hitung(0, 0));
            System.out.println("RMI Server Started...");

        } 
        catch (Exception e) {
            System.out.println("Server not connected " + e);
        }
    }
    
}

    