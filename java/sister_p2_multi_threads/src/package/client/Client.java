import java.io.*;
import java.net.*;
import java.util.*;
import java.lang.Thread;

public class Client extends Thread {

    Socket koneksi;
    DataInputStream terima;
    DataOutputStream kirim;
	KoneksiServer[] server;
	static String ipServer;


	public static final char 
		tambah = '+',
		kurang = '-',
		kali   = '*',
		bagi   = '/';



	Client (String ipServer) {
		server    = new KoneksiServer[4];
		server[0] = new KoneksiServer(ipServer, 5555); // Server Tambah	
		server[1] = new KoneksiServer(ipServer, 5556); // Server Kurang
		server[2] = new KoneksiServer(ipServer, 5557); // Server Kali
		server[3] = new KoneksiServer(ipServer, 5558); // Server Bagi
	}



	public void pilihServer(char operasi) {
		int tipeServer = 0;

		switch(operasi) {
			case tambah : tipeServer = 0; break;
			case kurang : tipeServer = 1; break;
			case kali   : tipeServer = 2; break;
			case bagi   : tipeServer = 3; break;
			default     : System.out.println("Operasi "+operasi+" tidak ditemukan, pilih operasi default '+'");
		}

		kirim  = server[tipeServer].kirim;
		terima = server[tipeServer].terima;
	}



	public void run() {
		BufferedReader input = new BufferedReader(new InputStreamReader(System.in));
		while(true) {
			try {
				System.out.println("\n\n\n");
				System.out.println("Masukan perhitungan contoh 2 + 3");
				System.out.println("--------------------------------");
				System.out.print("Hitung: ");
				String[] inputan = input.readLine().trim().split("\\s+");


				if(inputan.length != 3) {
					System.out.println("Input tidak valid, harap masukan input yang valid...");
					continue;
				}

				Double a     = Double.parseDouble(inputan[0]);
				char operasi = inputan[1].charAt(0);
				Double b     = Double.parseDouble(inputan[2]);

				if( operasi != '+' && operasi != '-' && operasi != '*' && operasi != '/') {
					System.out.println("Operasi tidak valid, harap masukan operasi yang valid...");
					continue;
				}

				System.out.println("Memilih server yang akan dihubungi...");
				pilihServer(operasi);

				System.out.println("Mengirim data pada server...");
				kirim.writeDouble(a);
				kirim.writeDouble(b);


				System.out.println("Meunggu data dari server...");
				Double c = terima.readDouble();

				System.out.println("Menerima data dari server: "+ String.valueOf(c));
			}
			catch (IOException e) {
				System.out.println("Terjadi kesalahan, membagun kembali koneksi...");
				for(KoneksiServer s : server) {
					s.tutup_koneksi();
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
	String ipServer;
	int portServer;
	Socket koneksi;
	DataInputStream terima;
	DataOutputStream kirim;

	KoneksiServer(String ipServer, int portServer) {
		this.ipServer   = ipServer;
		this.portServer = portServer;
		this.buat_koneksi();
	}

	public void buat_koneksi() {
		try{
			System.out.println("Mencoba menghubungi server "+ipServer+" pada port "+ portServer + " ...");
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
}
