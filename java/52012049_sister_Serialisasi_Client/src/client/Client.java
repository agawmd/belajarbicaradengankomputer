package client;

import java.io.*;
import java.net.*;
import java.util.*;
import java.lang.Thread;
import java.util.logging.Level;
import java.util.logging.Logger;
import message.Message;

public class Client extends Thread {

    Socket koneksi;
    ObjectInputStream terima;
    ObjectOutputStream kirim;
    KoneksiServer[] server;
    static String ipServer;


    Client (String ipServer) {
            server    = new KoneksiServer[4];
            server[0] = new KoneksiServer("Tambah", "+", ipServer, 5555); // Server Tambah	
            server[1] = new KoneksiServer("Kurang", "-", ipServer, 5556); // Server Kurang
            server[2] = new KoneksiServer("Kali",   "x", ipServer, 5557); // Server Kali
            server[3] = new KoneksiServer("Bagi",   "/", ipServer, 5558); // Server Bagi
    }



    public void run() {
        BufferedReader input = new BufferedReader(new InputStreamReader(System.in));
        while(true) {
            try {
                System.out.println("\n\n\n");
                System.out.println("Masukan perhitungan contoh 2 3");
                System.out.println("--------------------------------");
                System.out.print("Hitung: ");
                String[] inputan = input.readLine().trim().split("\\s+");


                if(inputan.length != 2) {
                        System.out.println("Input tidak valid, harap masukan input yang valid...");
                        continue;
                }

                Double a       = Double.parseDouble(inputan[0]);
                Double b       = Double.parseDouble(inputan[1]);
                float delayTime = (float) System.currentTimeMillis();
                for(KoneksiServer k : server) {
                    k.kirim_data(a, b);
                }
                delayTime = ((float)System.currentTimeMillis() -delayTime) /1000;
                System.out.println("-----------------\nProses selesai, delay: "+String.format("%.2f", delayTime)+" detik\n-----------------");
            }
            catch (IOException e) {
                System.out.println("Terjadi kesalahan, membagun kembali koneksi...");
                for(KoneksiServer s : server) {
                    try {
                        s.tutup_koneksi();
                    } catch (IOException ex) {
                        Logger.getLogger(Client.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
                new Client(ipServer).start();
                break;
            }
        }
    }



    public static void main (String args[]) throws IOException {
        ipServer = "127.0.0.1";
        new Client(ipServer).start();
        Message obj = new Message();
  
    }
}






class KoneksiServer {
    String ipServer, namaServer, operasi;
    int portServer;
    Socket koneksi;
    ObjectInputStream terima;
    ObjectOutputStream kirim;


    KoneksiServer(String namaServer,String operasi, String ipServer, int portServer) {
        this.namaServer = namaServer;
        this.operasi    = operasi;
        this.ipServer   = ipServer;
        this.portServer = portServer;
        this.buat_koneksi();
    }


    public void buat_koneksi() {
        try{
            System.out.println("Mencoba menghubungi server "+namaServer+"@"+ipServer+":"+ portServer + " ...");
            this.koneksi = new Socket(ipServer, portServer);
            this.terima  = new ObjectInputStream(koneksi.getInputStream());
            this.kirim   = new ObjectOutputStream(koneksi.getOutputStream());
            System.out.println("Berhasil membangun koneksi...");
        }
        catch (IOException e) {
            new IOException("Error, tidak dapat membuat koneksi...");
        }
    }


    public void tutup_koneksi() throws IOException{
        koneksi.close();
        terima.close();
        kirim.close();
    }


    public void kirim_data(double a, double b) throws IOException {
        System.out.println("Mengirim data pada server ["+namaServer+"@"+ipServer+":"+portServer+"]$ "+ String.valueOf(a)+" "+operasi+" "+ String.valueOf(b));
        float responseTime = (float) System.currentTimeMillis();
        kirim.writeObject(a);
        kirim.writeObject(b);
        float c      = (float) terima.readDouble();
        responseTime = ((float)System.currentTimeMillis() - responseTime) / 1000;
        System.out.println("Menerima data dari server ["+namaServer+"@"+ipServer+":"+portServer+ "]$ "+ String.format("%.2f", c)+"\n\t\t\t  response: "+String.format("%.2f", responseTime)+" detik");

    }
}

