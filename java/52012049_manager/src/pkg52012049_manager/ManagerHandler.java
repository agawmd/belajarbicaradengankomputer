/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pkg52012049_manager;

import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;
import java.net.Socket;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author BzKurozaki
 */
public class ManagerHandler extends Thread {

    DataInputStream managerTerima;
    DataOutputStream managerKirim;
    DataInputStream segitigaTerima;
    DataOutputStream segitigaKirim;
    DataInputStream persegiTerima;
    DataOutputStream persegiKirim;
    Socket managerSocket;
    Socket segitigaSocket;
    Socket persegiSocket;

    public ManagerHandler(Socket s) {

        try {
            managerSocket = s;
            managerTerima = new DataInputStream(managerSocket.getInputStream());
            managerKirim = new DataOutputStream(managerSocket.getOutputStream());
            System.out.println("new client connected");

            System.out.println("connecting to segitiga server...");
            segitigaSocket = new Socket("127.0.0.1", 8888);
            segitigaTerima = new DataInputStream(segitigaSocket.getInputStream());
            segitigaKirim = new DataOutputStream(segitigaSocket.getOutputStream());
            System.out.println("OK");

            System.out.println("connecting to persegi panjang server...");
            persegiSocket = new Socket("127.0.0.1", 8889);
            persegiTerima = new DataInputStream(persegiSocket.getInputStream());
            persegiKirim = new DataOutputStream(persegiSocket.getOutputStream());
            System.out.println("OK");
        } catch (IOException ex) {
            Logger.getLogger(ManagerHandler.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void run() {
        try {
            while (true) {
                String op = managerTerima.readUTF();
                double n1 = managerTerima.readDouble();
                double n2 = managerTerima.readDouble();
                double lu = 0.0;

                if (op.equals("Segitiga")) {
                    System.out.println("Mengirim request ke server segitiga..");
                    segitigaKirim.writeDouble(n1);
                    segitigaKirim.writeDouble(n2);
                    lu = segitigaTerima.readDouble();
                    System.out.println("Menerima hasil dari server segitiga: " + String.valueOf(lu));
                } else {
                    System.out.println("Mengirim request ke server persegi panjang..");
                    persegiKirim.writeDouble(n1);
                    persegiKirim.writeDouble(n2);
                    lu = persegiTerima.readDouble();
                    System.out.println("Menerima hasil dari server persegi panjang: " + String.valueOf(lu));
                }

                System.out.println("Mengirim hasil kalkulasi ke client..");
                managerKirim.writeDouble(lu);
            }

        } catch (IOException e) {
            try {
                System.out.println(e.getMessage());

                managerTerima.close();
                managerKirim.close();
                segitigaTerima.close();
                segitigaKirim.close();
                persegiTerima.close();
                persegiKirim.close();
                managerSocket.close();
                segitigaSocket.close();
                persegiSocket.close();
            } catch (IOException ex) {
                Logger.getLogger(ManagerHandler.class.getName()).log(Level.SEVERE, null, ex);
            }

        }

    }

}
