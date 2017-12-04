package pkg52012049_manager;

import java.io.IOException;
import java.io.*;
import java.net.*;
import java.util.logging.Level;
import java.util.logging.Logger;

public class Manager {

    public Manager() {
        ServerSocket ss = null;
        try {
            ss = new ServerSocket(8880);

            System.out.println("START MANAGER SERVER...");
            while (true) {
                System.out.println("waiting for connection...");
                new ManagerHandler(ss.accept()).start();
            }
        } catch (IOException e) {
            try {
                System.out.println(e.getMessage());
                ss.close();
            } catch (IOException ex) {
                Logger.getLogger(Manager.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    public static void main(String[] args) {
        while (true) {
            new Manager();
        }
    }
}
