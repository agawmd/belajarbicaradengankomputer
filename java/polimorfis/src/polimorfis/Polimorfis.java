/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package polimorfis;

/**
 *
 * @author aga
 */
public class Polimorfis {

    
    public int jumlah(int a, int b) {
        return (a+b);
    }
    
    public int jumlah(int a, int b, int c) {
        return (a+b+c);
    }    

    public int jumlah(double a, int b) {
        return (int) a+b;
    }
    
    public static void main(String[] args) {
        
        Geometri p;
        p = new Lingkaran();       
        System.out.println(p.getLuas());       
        
        p = new Segitiga();
        System.out.println(p.getLuas());
        
        p = new Geometri();
        
        
    }
    
}
