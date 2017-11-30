/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package circleserver;

import java.net.*;
import java.io.*;


/**
 *
 * @author kiyoshi
 */
public class CircleServer {
    
    int port=5555;
    ServerSocket servsocket;
    Socket s;
    DataInputStream in;
    DataOutputStream out;
    
    public CircleServer(){
        try{
            servsocket=new ServerSocket(port);
            System.out.println("CircleServer> di jalankan di port:"+port);
            s=servsocket.accept();
            in=new DataInputStream(s.getInputStream());
            out=new DataOutputStream(s.getOutputStream());
            
            double r=in.readDouble();
            System.out.println("CircleServer>Terima dari manajer="+r);
            double luas=r*r*3.14;
            System.out.println("CircleServer>Kirim luas lingkaran ke manajer="+luas);
            out.writeDouble(luas);
            
        }catch(Exception e){
            
        }
        
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        new CircleServer();
    }
    
}
