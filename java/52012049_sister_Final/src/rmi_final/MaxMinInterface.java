/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rmi_final;

import java.rmi.RemoteException;

/**
 *
 * @author aga
 */
interface MaxMinInterface {
    public int Max(int a, int b, int c) throws RemoteException;
    public int Min(int a, int b, int c) throws RemoteException;
}
