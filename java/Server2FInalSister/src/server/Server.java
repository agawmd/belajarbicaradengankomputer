/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package server;

import Message.Message;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.ServerSocket;
import java.net.Socket;

/**
 *
 * @author aga
 */
public class Server extends Thread{
    ServerSocket serv;
    Socket s;
    int port=7778;
    ObjectInputStream in;
    ObjectOutputStream out;
    Message msgin;
    Message msgout;
    
    public Server(){
       
        try{
            serv=new ServerSocket(port);
            while(true){
                System.out.println("Server Min started on port:"+port);
                s=serv.accept();
                in=new ObjectInputStream(s.getInputStream());
                out=new ObjectOutputStream(s.getOutputStream());
                msgin=new Message(0,0,0);
            
                /* Baca paket dari jaringan*/
                msgin=(Message)in.readObject();
            
                /* Ekstrak isi paket */
                double a=msgin.getA();
                double b=msgin.getB();
                double c=msgin.getC();
            
                /* cari nilai terbesar */
                double min=0;
                if(a<b)
                    if(a<c)
                        min=a;
                    else
                        min=c;
                else 
                    if (b<c)
                        min=b;
                    else
                        min=c;
           
                /* Buat paket untuk dikirim kembali dan 
                    Masukkan hasil pemrosesan ke paket 
                    Karena data hanya satu, sementara dalam
                    paket tersedia 3 ruang/kolom, maka hasil
                    diisi di kolom pertama, yang lain dibuat 0 
                    sehingga nanti di client perlu diekstrak 
                    kolom pertama yang berisi hasil nilai terbesar
                */
                msgout=new Message(min,0,0);
            
                /* kirim paket hasil ke client*/
                out.writeObject(msgout);
            }    
            
        }catch(Exception e){
            System.out.println(e);
        }
    }
    
    
    public void run() {
        System.out.println("Ini Server Minimum");
    }
    
    
    
    public static void main(String[] args) {
        new Server();
    }
    
}
