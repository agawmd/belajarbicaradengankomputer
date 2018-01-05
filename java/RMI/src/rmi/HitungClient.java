/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rmi;

import java.rmi.*;
/**
 *
 * @author aga
 */
public class HitungClient {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        try {
            HitungInterface stub = (HitungInterface)Naming.lookup("rmi://localhost:5000");
            System.out.println(stub.Jumlah(0, 0));
            System.out.println(stub.Bagi(0, 0));
            System.out.println(stub.Kali(0, 0));
            System.out.println(stub.Kurang(0, 0));
        } catch (Exception e) {
            
        }
        
    }
    
}

