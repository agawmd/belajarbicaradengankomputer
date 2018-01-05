/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rmi;

/**
 *
 * @author aga
 */

import java.rmi.*;

public interface HitungInterface extends Remote{
    public double Jumlah(double a, double b) throws RemoteException;
    public double Kali(double a, double b) throws RemoteException;
    public double Kurang(double a, double b) throws RemoteException;
    public double Bagi(double a, double b) throws RemoteException;
}
