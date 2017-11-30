/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package manajer;

import java.net.*;
import java.io.*;

/**
 *
 * @author kiyoshi
 */
public class Manajer {
    int manajerport=5556;
    int circleserverport=5555;
    String circleserverhost="localhost";
    double hasilakhir=0;
    double r2;

    
    
    ServerSocket servsocket;
    Socket s;
    DataInputStream in;
    DataOutputStream out;
    public Manajer(){
         try{
            servsocket=new ServerSocket(manajerport);
            System.out.println("Manajer> di jalankan di port:"+manajerport);
            s=servsocket.accept();
            in=new DataInputStream(s.getInputStream());
            out=new DataOutputStream(s.getOutputStream());
            
            double r=in.readDouble();
            System.out.println("Manajer>Terima jari-jari dari client="+r);
            ConnectToServer(r);
            System.out.println("Manajer>Teruskan hasil ke client");
            out.writeDouble(hasilakhir);
            
        }catch(Exception e){
            
        }
        
    }

    public final  void ConnectToServer(double r1){
        try{
            Socket s1=new Socket(circleserverhost,circleserverport);
            DataInputStream in1=new DataInputStream(s1.getInputStream());
            DataOutputStream out1=new DataOutputStream(s1.getOutputStream());
            System.out.println("Manajer>Teruskan jari-jari ke CircleServer");
            out1.writeDouble(r1);
            hasilakhir=in1.readDouble();
            System.out.println("Manajer>Terima hasil dari CircleServer="+hasilakhir);
           
            
        }catch(Exception e){
            System.out.println(e);
        }
        
        
        
        
    }
    
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        new Manajer();
    }
    
}
