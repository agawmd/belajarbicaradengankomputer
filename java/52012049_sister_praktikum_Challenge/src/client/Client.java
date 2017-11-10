package client;

import java.io.*;
import java.net.*;
import java.util.*;
import java.lang.Thread;
import java.util.logging.Level;
import java.util.logging.Logger;

public class Client extends Thread {

    Socket koneksi;
    DataInputStream terima;
    DataOutputStream kirim;
    KoneksiServer[] server;
    static String ipServer;


    Client (String ipServer) {
            server    = new KoneksiServer[2];
            server[0] = new KoneksiServer("Hitung Luas Lingkaran", "3.14*n*n", ipServer, 5555); // Server Tambah	
            server[1] = new KoneksiServer("Hitung Luas Persegi", "n*n*n", ipServer, 5556); // Server Kurang

    }



    public void run() {
        BufferedReader input = new BufferedReader(new InputStreamReader(System.in));
        while(true) {
            try {
                System.out.println("\n\n\n");
                System.out.println("Hitung Luas Bangun Datar Persegi & Lingkaran");
                System.out.println("------------------------------------------");
                System.out.print("Input n : ");
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



    public static void main (String args[]) {
        ipServer = "127.0.0.1";
        new Client(ipServer).start();
    }
}






class KoneksiServer {
    String ipServer, namaServer, operasi;
    int portServer;
    Socket koneksi;
    DataInputStream terima;
    DataOutputStream kirim;


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
            this.terima  = new DataInputStream(koneksi.getInputStream());
            this.kirim   = new DataOutputStream(koneksi.getOutputStream());
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
        kirim.writeDouble(a);
        kirim.writeDouble(b);
        float c      = (float) terima.readDouble();
        responseTime = ((float)System.currentTimeMillis() - responseTime) / 1000;
        System.out.println("Menerima data dari server ["+namaServer+"@"+ipServer+":"+portServer+ "]$ "+ String.format("%.2f", c)+"\n\t\t\t  response: "+String.format("%.2f", responseTime)+" detik");

    }
}

