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
public class TestMultithreading {

public static void main(String[] args) {
        // TODO code application logic here
        PrintAngka thread1 = new PrintAngka(10);
        PrintChar thread2 = new PrintChar(10, 'A');
        PrintChar thread3 = new PrintChar(10, 'D');
        
        thread1.start();
        thread2.start();
        thread3.start();
        
    }
    
}
