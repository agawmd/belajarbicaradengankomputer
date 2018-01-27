/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rmi_final;

/**
 *
 * @author aga
 */

import java.rmi.*;

public interface HitungInterface extends Remote{
    public double Jumlah(double a, double b) throws RemoteException;
    public double Kali(double a, double b) throws RemoteException;

    public String Jumlah(double a, double b, double c);

}
