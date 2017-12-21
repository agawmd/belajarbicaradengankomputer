/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pkg52012049_serialization_client;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.Socket;
import java.util.logging.Level;
import java.util.logging.Logger;
import messages.RequestMessage;
import messages.ResponseMessage;
/**
 *
 * @author BzKurozaki
 */
public class Client {

    /**
     * API Variables
     */
    Socket              api;
    ObjectInputStream   terima;
    ObjectOutputStream  kirim;
    RequestMessage      req;    
    ResponseMessage     res;
    
    
    /**
     * Server information
     */
    String              ipServer;
    int                 port;
    
    
    /**
     * Client Costructor
     */
    Client (String ip) {
        try {
            ipServer = ip;
            
            System.err.println("Connect to server "+ipServer);
            api = new Socket(ipServer, 8181);            
            req = new RequestMessage();
            res = new ResponseMessage();
            
            kirim  = new ObjectOutputStream(api.getOutputStream());
            terima = new ObjectInputStream (api.getInputStream());
            this.readInput();
        } catch (IOException e) {
            System.err.println("Could not create connect to server, server might be die.");
        }
    }


    public void readInput() {
        /**
         * Create buffer reader to read user input
         */
        BufferedReader input = new BufferedReader(new InputStreamReader(System.in));
        while(true) {
            try {
                /**
                 * Show application parameter to guide user to fill the required parameters
                 */
                System.out.println("\n\n\n");
                System.out.println("Persegi Panjang-> panjang x lebar)");
                System.out.println("contoh: Panjang 3.2 x Lebar 5");
                System.out.println("----------------------------------");
                System.out.print("Persegi Panjang-> ");

                /**
                 * Validate user input, then break the request if there is any invalid parameters
                 */
                String[] inputan = input.readLine().trim().split(" ");
                if(inputan.length != 2) {
                    System.out.println("Input tidak valid, harap masukan input yang valid...");
                    continue;
                }

                /**
                 * Set parameters for request message
                 */
                req.panjang = Double.parseDouble(inputan[0]);
                req.lebar   = Double.parseDouble(inputan[1]);
                
                /**
                 * Send the request to server and display server response
                 */
                System.out.println("Send request to server  -> "+ req.toString());
                kirim.writeObject(req);
                res = (ResponseMessage) terima.readObject();
                System.out.println("Recieve server response -> "+ res.toString());
                
            }
            catch (ClassNotFoundException cnf){
                System.out.println("Terjadi kesalahan, class tidak ditemukan \n--------\n"+cnf.getMessage());
            }
            catch (IOException e) {
                System.out.println("Terjadi kesalahan,");
                    try {
                        kirim.close();
                        terima.close();
                        api.close();
                    } catch (IOException ex) {
                        Logger.getLogger(Client.class.getName()).log(Level.SEVERE, null, ex);
                    }
                new Client(ipServer);
                break;
            }
        }
    }



    public static void main (String args[]) {
        /**
         * Creating new instance for client
         */
        new Client("localhost");
    }
}




