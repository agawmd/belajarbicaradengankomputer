/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pkg52012049_segitiga;

import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;
import java.net.Socket;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author BzKurozaki
 */
public class SegitigaHandler extends Thread{

    
    public DataInputStream  segitigaTerima;
    public DataOutputStream segitigaKirim;
    public Socket           segitigaSocket;


    
    public SegitigaHandler(Socket s) throws IOException {
            segitigaSocket  = s;
            segitigaTerima = new DataInputStream(segitigaSocket.getInputStream());
            segitigaKirim  = new DataOutputStream(segitigaSocket.getOutputStream());
            System.out.println("new client connected...");
    }
    

    public void run() {
        try {
            while(true) {
                double n1 = segitigaTerima.readDouble();
                System.out.println("Menerima input dari manager N1: " + String.valueOf(n1));
                double n2 = segitigaTerima.readDouble();
                System.out.println("Menerima input dari manager N2: " + String.valueOf(n2));
                double lu = (n1 * n2) / 2;
                System.out.println("Mengirim hasil ke manager Luas: " + String.valueOf(lu));
                segitigaKirim.writeDouble(lu);
            }

        } catch (IOException e) {
            try {
                System.out.println(e.getMessage());
                segitigaKirim.close();
                segitigaTerima.close();
                segitigaSocket.close();
            } catch (IOException ex) {
                Logger.getLogger(SegitigaHandler.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }
    
}
