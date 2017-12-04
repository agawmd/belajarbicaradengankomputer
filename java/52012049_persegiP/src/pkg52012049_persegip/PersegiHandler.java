package pkg52012049_persegip;

import java.io.IOException;
import java.io.*;
import java.net.*;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.SwingUtilities;

public class PersegiHandler extends Thread {

    public DataInputStream persegiTerima;
    public DataOutputStream persegiKirim;
    public Socket persegiSocket;

    public PersegiHandler(Socket s) {
        try {
            persegiSocket = s;
            persegiTerima = new DataInputStream(persegiSocket.getInputStream());
            persegiKirim = new DataOutputStream(persegiSocket.getOutputStream());
            System.out.println("new client connected...");
        } catch (IOException e) {
            System.out.println("ERROR...");
            System.out.println(e.getMessage() + "");
        }
    }

    public void run() {
        try {
            while (true) {
                double n1 = persegiTerima.readDouble();
                System.out.println("Menerima input dari manager N1: " + String.valueOf(n1));
                double n2 = persegiTerima.readDouble();
                System.out.println("Menerima input dari manager N2: " + String.valueOf(n2));
                double lu = n1 * n2;
                System.out.println("Mengirim hasil ke manager Luas: " + String.valueOf(lu));
                persegiKirim.writeDouble(lu);
            }

        } catch (IOException e) {
            try {
                System.out.println(e.getMessage());
                persegiKirim.close();
                persegiTerima.close();
                persegiSocket.close();
            } catch (IOException ex) {
                Logger.getLogger(PersegiHandler.class.getName()).log(Level.SEVERE, null, ex);
            }
                    
                    
        }
    }

}
