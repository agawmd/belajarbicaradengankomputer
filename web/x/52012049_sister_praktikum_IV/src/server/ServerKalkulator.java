//package server;

import java.io.*;
import java.net.*;
import java.lang.Thread;


public class ServerKalkulator extends Thread{

    char operasi;
    int port;
    ServerSocket koneksi;

    ServerKalkulator(char op, int po) {
    	operasi = op;
    	port    = po;
    }

	public void run() {
		int no = 1;
		try{
			koneksi = new ServerSocket(port);
			while(true) {
				System.out.println("Menunggu koneksi dari client " + no + " pada port "+ String.valueOf(port));
	  			new ClientHandler(koneksi.accept(), no++, operasi).start();
			}
		}
		catch (IOException e) {
			System.out.println("Error, terjadi kesalahan saat membuat koneksi...");
		}
	}




}





class ClientHandler extends Thread {
  
    Socket pemegang_koneksi;
    DataInputStream terima;
    DataOutputStream kirim;
    int clientId;
    char operasi;


    ClientHandler(Socket conn, int id, char op) {
    	try {		
	    	clientId = id;
	    	operasi  = op;
			pemegang_koneksi = conn;
			terima   = new DataInputStream(pemegang_koneksi.getInputStream());
			kirim    = new DataOutputStream(pemegang_koneksi.getOutputStream());
			System.out.println("Berhasil membangun koneksi dengan client " + clientId);
    	}
    	catch(IOException e) {
				System.out.println("Error, tidak dapat membuat koneksi...");
    	}
    }



  	public void run() {
		try {
			while(true) {
				Double a = terima.readDouble();
				Double b = terima.readDouble();
				System.out.println("Menerima Input dari client " + clientId + ": " + a + " " + b);
				Double c = 0.0;

				switch(operasi) {
					case '+' : c = a + b; break;
					case '-' : c = a - b; break;
					case '*' : c = a * b; break;
					case '/' : c = a / b; break;
				}

				kirim.writeDouble(c);
			}
		}
		catch (IOException e) {
			System.out.println("Terjadi kesalahan, tutup semua koneksi pada client "+ clientId);
			tutup_koneksi();
		}
  	}




    public void tutup_koneksi() {
    	try {		
	    	pemegang_koneksi.close();
	    	terima.close();
	    	kirim.close();
    	}
    	catch (IOException e) {
    		System.out.println("Terjadi kesalahan saat menutup koneksi...");
    	}
    }


}