/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package client;

import java.io.*;
import java.net.*;
import Message.Message;



/**
 *
 * @author kiyoshi
 */
public class ClientThread implements Runnable{
 
    private int port=0;
    private String host="localhost";
    private double value=0;
    
    private Socket s;
    private Message msgout;
    private Message msgin;
    
    private ObjectOutputStream out;
    private ObjectInputStream in;
    
    public ClientThread(String h, int p, double a,double b,double c){
        host=h;
        port=p;
        msgout=new Message(a,b,c);
    }
    
    public void run(){
        try{
            /* Lakukan koneksi ke setiap server */
            s=new Socket(host,port);
            
            /* Siapkan saluran untuk pengiriman dan penerimaan paket*/
            out=new ObjectOutputStream(s.getOutputStream());
            in=new ObjectInputStream(s.getInputStream());
    
            /* Kirim paket ke server */
            out.writeObject(msgout);
            
            /* Terima paket hasil dari server */
            msgin=(Message)in.readObject();
            
            /* Ekstrak data yang berisi hasil pemrosesan 
               seperti yang telah dilakukan oleh server 
               bahwa kolom pertama (nilai a) dari paket merupakan hasil
            */
            value=msgin.getA();
            //System.out.println(value);
            
        }catch(Exception e){
            System.out.println(e);
        }    
    }
    
    /* Mengembalikan nilai yang diterima thread client */
    public double getValue(){
        return value;
    }
    
    
}
