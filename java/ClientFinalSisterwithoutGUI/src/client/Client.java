/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package client;

import java.io.*;
import java.net.*;



/**
 *
 * @author kiyoshi
 */
public class Client extends Thread{
    
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
      /* ambil semua nilai yang diinput user */
        double a=12;
        double b=3;
        double c=56;
        
        /* siapkan thread pertama 
           yang melakukan komunikasi ke server pertama */
        ClientThread th1=new ClientThread("localhost",7777,a,b,c);
        
        
        /* siapkan thread kedua 
           yang melakukan komunikasi ke server kedua */
        ClientThread th2=new ClientThread("localhost",7778,a,b,c);
        
       
        /* Buat objek threads */
        Thread mythread1=new Thread(th1);
        Thread mythread2=new Thread(th2);
        
        
        /* Jalankan threads */
        mythread1.start();
        mythread2.start();
       
        
        /* Pastikan aktifitas setiap thread 
           telah selesai */
        try{
             mythread1.join();
             mythread2.join();
             
             
        }catch(InterruptedException e){
             System.out.println(e.toString());
        }
        
        /* Tampilkan hasil dari server */
        System.out.println("Nilai Maximum = "+th1.getValue());
        System.out.println("Nilai Minimum = "+th2.getValue());
    }
    
}
