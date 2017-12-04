package pkg52012049_segitiga;
import java.io.IOException;
import java.io.*;
import java.net.*;
import javax.swing.SwingUtilities;

public class Segitiga {

    public DataInputStream  segitigaTerima;
    public DataOutputStream segitigaKirim;
    public Socket           segitigaSocket;

    public Segitiga() {
        try {
            System.out.println("START SEGITIGA SERVER...");
            ServerSocket ss = new ServerSocket(8888);
            System.out.println("Waiting for connection...");
            segitigaSocket  = ss.accept();
            segitigaTerima = new DataInputStream(segitigaSocket.getInputStream());
            segitigaKirim  = new DataOutputStream(segitigaSocket.getOutputStream());
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
                double n1 = segitigaTerima.readDouble();
                System.out.println("Menerima input dari manager N1: " + String.valueOf(n1));
                double n2 = segitigaTerima.readDouble();
                System.out.println("Menerima input dari manager N2: " + String.valueOf(n2));
                double lu = (n1 * n2) / 2;
                System.out.println("Mengirim hasil ke manager Luas: " + String.valueOf(lu));
                segitigaKirim.writeDouble(lu);
            }

        } catch (IOException e) {
            System.out.println(e.getMessage());
        }
    }
    
    public static void main(String[] args) {
        new Segitiga();        
    }
}
