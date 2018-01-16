

import server_kecil.*;
import java.io.IOException;
import java.io.*;
import java.net.*;
import java.util.logging.Level;
import java.util.logging.Logger;
import message.RequestMessage;


public class ClientHandler extends Thread {

    public ObjectInputStream terima;
    public ObjectOutputStream kirim;
    public Socket api;
    RequestMessage req;


    public ClientHandler(Socket s) {
        try {
            api = s;
            terima = new ObjectInputStream(api.getInputStream());
            kirim = new ObjectOutputStream(api.getOutputStream());
            System.out.println("new client connected...");
            req = new RequestMessage();

        } catch (IOException e) {
            System.out.println("ERROR...");
            System.out.println(e.getMessage() + "");
        }
    }

    public void run() {
        try {
            while (true) {
                System.out.println("Waiting for input...");
                req = (RequestMessage) terima.readObject();
                System.out.println("Request  -> " + req.toString());

            }

        } catch (IOException e) {
            try {
                System.out.println(e.getMessage());
                kirim.close();
                terima.close();
                api.close();
            } catch (IOException ex) {
                Logger.getLogger(ClientHandler.class.getName()).log(Level.SEVERE, null, ex);
            }
                    
                    
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(ClientHandler.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

}
