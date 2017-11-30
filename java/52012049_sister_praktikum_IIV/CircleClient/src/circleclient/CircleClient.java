/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package circleclient;
import java.net.*;
import java.io.*;


/**
 *
 * @author kiyoshi
 */
public class CircleClient {
    DataInputStream in;
    DataOutputStream out;
    int manajerport = 5556;
    String manajerhost="localhost";
    
    public CircleClient(double r){
        try{
            Socket s=new Socket(manajerhost,manajerport);
            DataOutputStream out = new DataOutputStream(s.getOutputStream());
            DataInputStream in = new DataInputStream(s.getInputStream());
            System.out.println("Kirim jari-jari lingkaran ke manajer ="+r);
            out.writeDouble(r);
            double hasil=in.readDouble();
            System.out.println("Luas Lingkaran = "+hasil);
        }catch(Exception e){
            
        }
    }
    
    /**
     * @param args the command line arguments
     */
    
    
    public static void main(String[] args) {
        new CircleClient(6.0);
        
    }
    
}
