/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package testmultithreading;

/**
 *
 * @author aga
 */
public class PrintAngka extends Thread{

    /**
     * @param args the command line arguments
     */
    
    int n;
    
    public PrintAngka(int n) {
        this.n=n;
    }
    
    public void run() {
        for (int i=1; i<=n; i++) {
            System.out.print(i+",");
        }
    }
    
    public static void main(String[] args) {
        // TODO code application logic here
    }
    
}
