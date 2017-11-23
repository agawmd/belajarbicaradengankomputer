/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mid_52012049;

import java.io.IOException;
import java.io.*;
import java.net.*;

/**
 *
 * @author BzKurozaki
 */
public class Manager {

    DataInputStream managerTerima;
    DataOutputStream managerKirim;
    DataInputStream segitigaTerima;
    DataOutputStream segitigaKirim;
    DataInputStream persegiTerima;
    DataOutputStream persegiKirim;
    Socket managerSocket;
    Socket segitigaSocket;
    Socket persegiSocket;

    public Manager() {
        try {
            System.out.println("START MANAGER SERVER...");
            ServerSocket ss = new ServerSocket(8880);
            managerSocket = ss.accept();
            managerTerima = new DataInputStream(managerSocket.getInputStream());
            managerKirim = new DataOutputStream(managerSocket.getOutputStream());
            System.out.println("OK");

            System.out.println("connecting to segitiga server...");
            segitigaSocket = new Socket("127.0.0.1", 8888);
            segitigaTerima = new DataInputStream(segitigaSocket.getInputStream());
            segitigaKirim = new DataOutputStream(segitigaSocket.getOutputStream());
            System.out.println("OK");

            System.out.println("connecting to persegi server...");
            persegiSocket = new Socket("127.0.0.1", 8889);
            persegiTerima = new DataInputStream(persegiSocket.getInputStream());
            persegiKirim = new DataOutputStream(persegiSocket.getOutputStream());
            System.out.println("OK");
            run();
        } catch (IOException e) {

        }

    }

    public void run() {
        try {
            while (true) {
                String op = managerTerima.readUTF();
                double n1 = managerTerima.readDouble();
                double n2 = managerTerima.readDouble();
                double lu = 0.0;

                if (op.equals("segitiga")) {
                    System.out.println("Mengirim request ke server segitiga..");
                    segitigaKirim.writeDouble(n1);
                    segitigaKirim.writeDouble(n2);
                    lu = segitigaTerima.readDouble();
                    System.out.println("Menerima hasil dari server segitiga: " + String.valueOf(lu));
                } else {
                    System.out.println("Mengirim request ke server persegi..");
                    persegiKirim.writeDouble(n1);
                    persegiKirim.writeDouble(n2);
                    lu = persegiTerima.readDouble();
                    System.out.println("Menerima hasil dari server persegi: " + String.valueOf(lu));
                }

                System.out.println("Mengirim hasil kalkulasi ke client..");
                managerKirim.writeDouble(lu);
            }

        } catch (IOException e) {
            System.out.println(e.getMessage());
        }
    }

    public static void main(String[] args) {
        new Manager();
    }
}
