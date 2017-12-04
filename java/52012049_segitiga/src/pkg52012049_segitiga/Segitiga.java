package pkg52012049_segitiga;

import java.io.IOException;
import java.io.*;
import java.net.*;
import javax.swing.SwingUtilities;

public class Segitiga {

    public Segitiga() {
        ServerSocket ss = null;
        try {
            System.out.println("START SEGITIGA SERVER...");
            System.out.println("Waiting for connection...");
            ss = new ServerSocket(8888);
            while (true) {
                new SegitigaHandler(ss.accept()).start();
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
            new Segitiga();
        }
    }
}
