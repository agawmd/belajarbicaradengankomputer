/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rmi;



import java.rmi.*;
import java.rmi.registry.*;



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
            r.rebind("Hitung", new Hitung(3, 9));
            System.out.println("RMI Server Started...");
//            Hitung me = new Hitung();
//            Naming.rebind("rmi://localhost:5000/kharisma", me);

        } 
        catch (Exception e) {
            System.out.println("Server not connected " + e);
        }
    }
    
}

    