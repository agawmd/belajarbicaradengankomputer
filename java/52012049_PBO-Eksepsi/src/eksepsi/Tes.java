/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package eksepsi;

/**
 *
 * @author aga
 */
public class Tes {

    /**
     * @param args the command line arguments
     */
    
    
    
    public static void main(String[] args) {
        // TODO code application logic here
        
        //int x = 10;
        //int y = 0;
        //int z = x/y; // Aritmatic Exception
        
        //System.out.println(z);
        
        try {
            int x = 10;
            int y = 0;
            int z = x/y;
            System.out.println(z);
        } catch (ArithmeticException e) {
            System.out.println();
        }
        
        
        
    }
    
}
