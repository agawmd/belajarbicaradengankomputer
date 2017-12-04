package pkg52012049_persegip;
import java.io.IOException;
import java.io.*;
import java.net.*;
import javax.swing.SwingUtilities;

public class Persegi {

    public DataInputStream  persegiTerima;
    public DataOutputStream persegiKirim;
    public Socket           persegiSocket;

    public Persegi() {
        try {
            System.out.println("START PERSEGI PANJANG SERVER...");
            ServerSocket ss = new ServerSocket(8889);
            System.out.println("Waiting for connection...");
            persegiSocket  = ss.accept();
            persegiTerima = new DataInputStream(persegiSocket.getInputStream());
            persegiKirim  = new DataOutputStream(persegiSocket.getOutputStream());
            System.out.println("connection builded...");
            run();
        } catch (IOException e) {
            System.out.println("ERROR...");
            System.out.println(e.getMessage()+"");
        }
    }
    
    public void run() {
        try {
            while(true) {
                double n1 = persegiTerima.readDouble();
                System.out.println("Menerima input dari manager N1: " + String.valueOf(n1));
                double n2 = persegiTerima.readDouble();
                System.out.println("Menerima input dari manager N2: " + String.valueOf(n2));
                double lu = n1 * n2;
                System.out.println("Mengirim hasil ke manager Luas: " + String.valueOf(lu));
                persegiKirim.writeDouble(lu);
            }

        } catch (IOException e) {
            System.out.println(e.getMessage());
        }
    }
    
    public static void main(String[] args) {
        new Persegi();        
    }
}
