/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package midsister;

import java.io.*;
import java.net.*;
import java.lang.Thread;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author BzKurozaki
 */
class ServerHandler extends Thread {

    protected int port;
    protected String serverName;
    protected ServerSocket serverSocket;
    protected List<ServerRequestHandler> clients;

    
    ServerHandler(String name, int p) {
        try {
            System.out.println("Starting up server on port: " + String.valueOf(p));
            port       = p;
            clients    = new ArrayList<ServerRequestHandler>();
            serverName = name;
            serverSocket = new ServerSocket(port);
            System.out.println("Success, waiting for connection...");
            this.start();
        } catch (IOException e) {
            System.out.println("Failed to start server on port: " + String.valueOf(p));
            System.out.println(e.getMessage().toString());
        }
    }

    
    
    public void run() {
        try {
            int id = 0;
            while (true) {
                ServerRequestHandler srh = new ServerRequestHandler(serverSocket.accept(), ++id);
                System.out.println("new client has been connected.");
                
                clients.add(srh);
                srh.start();
            }

        } catch (IOException e) {
            System.out.println("Error, could not create connection.");
            System.out.println(e.getMessage());
        }
    }
    
}





class ServerRequestHandler extends Thread {

    private DataInputStream baca;
    private DataOutputStream tulis;
    private int clientId;


    public ServerRequestHandler(Socket s, int id) throws IOException {
        System.out.println("Prepaing connection with client " + String.valueOf(id));
        baca     = new DataInputStream(s.getInputStream());
        tulis    = new DataOutputStream(s.getOutputStream());
        clientId = id;
        System.out.println("Done.");
    }

//    
//    public void run() {
//        try {
//
//            while (true) {
//                
//            }
//
//        } catch (Exception e) {
//            System.out.println("Error, tidak dapat membangun koneksi.");
//            System.out.println(e.getMessage());
//        } finally {
//            System.out.println("Client " + String.valueOf(clientId) + " was disconnected.");
//            closeConnection();
//        }
//    }
//    
    
    private void closeConnection (){
        try {
            System.out.println("Closing connection with client " + String.valueOf(clientId));
            baca.close();
            tulis.close();
        } catch (Exception e) {
            System.out.println("Failed to close connection.");
            System.out.println(e.getMessage());
        }
    }

}
