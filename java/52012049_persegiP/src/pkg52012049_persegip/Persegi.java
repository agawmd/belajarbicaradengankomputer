package pkg52012049_persegip;

import java.io.IOException;
import java.io.*;
import java.net.*;
import javax.swing.SwingUtilities;

public class Persegi {

    public Persegi() {
        ServerSocket ss = null;
        try {
            System.out.println("START PERSEGI PANJANG SERVER...");
            ss = new ServerSocket(8889);
            System.out.println("Waiting for connection...");
            while (true) {
                new PersegiHandler(ss.accept()).start();
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
            new Persegi();
        }
    }
}
