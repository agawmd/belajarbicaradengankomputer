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
public class PrintChar extends Thread{
    int n;
    char ch;
    
    public PrintChar(int n, char ch) {
        this.n=n;
        this.ch=ch;
    }
    
    public void run() {
        for (int i=1; i<=n; i++) {
            System.out.print(ch+",");
        }
    }    
}
