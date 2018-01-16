package client_serialisasi;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.Socket;
import java.util.logging.Level;
import java.util.logging.Logger;
import message.RequestMessage;

/**
 *
 * @author aga
 */
public class Client {

    /**
     * API Variables
     */
    Socket              api;
    ObjectInputStream   terima;
    ObjectOutputStream  kirim;
    RequestMessage      req;        
    
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
                System.out.println("Masukkan Nilai");
                System.out.println("contoh: 2 6 4");
                System.out.println("----------------");
                System.out.print("Nilai Terbesar -> ");
                System.out.print("Nilai Terkecil -> ");

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
                req.a = Double.parseDouble(inputan[0]);
                req.b   = Double.parseDouble(inputan[1]);
                req.c   = Double.parseDouble(inputan[2]);
                
                /**
                 * Send the request to server and display server response
                 */
                System.out.println("Send request to server  -> "+ req.toString());
                kirim.writeObject(req);
                terima.readObject();
                
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
