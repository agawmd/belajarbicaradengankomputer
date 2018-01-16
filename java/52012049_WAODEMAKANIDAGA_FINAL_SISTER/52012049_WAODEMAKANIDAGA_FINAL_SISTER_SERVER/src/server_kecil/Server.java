package server_kecil;

import java.io.IOException;
import java.net.ServerSocket;

/**
 *
 * @author aga
 */
public class Server {

    public Server() {
        ServerSocket ss = null;
        try {
            System.out.println("START Server...");
            ss = new ServerSocket(8181);
            System.out.println("Waiting for connection...");
            while (true) {
                new ClientHandler(ss.accept()).start();
            }
        } catch (IOException e) {
            System.out.println("ERROR...");
            System.out.println(e.getMessage() + "");
            try {
                ss.close();
            } catch (IOException ex) {
                System.out.println("ERROR...");
                System.out.println(ex.getMessage() + "");

            }
        }
    }
    public static void main(String[] args) {
        while (true) {
            new Server();
        }
    }
    
}