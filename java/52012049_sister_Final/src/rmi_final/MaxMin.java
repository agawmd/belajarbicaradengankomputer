package rmi_final;
import java.rmi.*;
import java.rmi.server.*;
import java.rmi.server.UnicastRemoteObject;
/**
 *
 * @author aga
 */
public class MaxMin extends UnicastRemoteObject implements MaxMinInterface {
    private int a;
    private int b;
    private int c;
    
    
    MaxMin() throws RemoteException {
        super();
    }
    
   
    public MaxMin(int a, int b, int c) throws RemoteException {
        this.a = a;
        this.b = b;
        this.c = c;
    }

    
    
    public int Max( int a, int b, int c) {
        
                int max=0;
                if(a>b)
                    if(b>c)
                        max=c;
                    else
                        max=b;
                else 
                    if (a>c)
                        max=c;
                    else
                        max=a;
        return(max);
    }
    public int Min( int a, int b, int c) {
        
                int min=0;
                if(a<b)
                    if(b<c)
                        min=c;
                    else
                        min=b;
                else 
                    if (a<c)
                        min=c;
                    else
                        min=a;
        return(min);
    }
    
    
}
