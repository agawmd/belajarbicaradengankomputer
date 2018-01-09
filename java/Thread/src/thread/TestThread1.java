/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package thread;

/**
 *
 * @author aga
 */
public class TestThread1 implements Runnable{

    /**
     * @param args the command line arguments
     */
    
    public void run() {
        System.out.println("Ini Thread");
    }
    
    
    public static void main(String[] args) {
        // TODO code application logic here
        TestThread1 t = new TestThread1();
        Thread th1 = new Thread(t);
        th1.start();
    }
    
}
