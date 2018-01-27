/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rmi_final;

import java.rmi.Remote;
import java.rmi.registry.Registry;

/**
 *
 * @author aga
 */
public class MaxMinServer {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        try {
            Registry r = java.rmi.registry.LocateRegistry.createRegistry(7779);
            r.rebind("Nilai Max", new MaxMin(0,0,0));
            System.out.println("RMI Server MaxMin Started...");
        } catch (Exception e) {
            System.out.println("Server not Connected" + e);
        }
    }
    
}
