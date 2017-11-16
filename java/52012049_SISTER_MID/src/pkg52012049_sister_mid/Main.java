package pkg52012049_sister_mid;

/**
 *
 * @author aga
 */

import java.io.BufferedReader;
import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.InputStreamReader;
import java.net.Socket;


public class Main extends Thread{
    
    Socket koneksi;
    DataInputStream terima;
    DataOutputStream kirim;
    KoneksiServer server;
    static String ipServer;
    
    Main (String ipServer) {
        server      = new KoneksiServer(2);
        server      = new KoneksiServer("Luas Segitiga","=", ipServer, 5555);
        server      = new KoneksiServer("Luas Persegi Panjang","=", ipServer, 5556);
        
    }

    
    
    
    public static void main(String[] args) {
        // TODO code application logic here
    }

    private static class KoneksiServer {

        public KoneksiServer() {
        }

        private KoneksiServer(int i) {
            throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        }

        private KoneksiServer(String luas_Persegi_Panjang, String string, String ipServer, int i) {
            throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        }
    }
    
}
