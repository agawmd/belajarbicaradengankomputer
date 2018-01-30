/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package source;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;

/**
 *
 * @author aga
 */
public class OperasiFile {

    /**
     * @param args the command line arguments
     */
    
    
    double a, b ;
    
    private static final String filename = "/home/aga/record.txt";
    
    private double getLuas(double p, double l) {
        this.a= p;
        this.b= l;
        
        return(p*l);
        
    }
    
    private double getKeliling(double p, double l) {
        this.a=p;
        this.b=l;
        
        return(2*p+l);
        
    }

    public static void main(String[] args) {
    
        BufferedReader br = null;
        FileReader fr = null;
               
        
        try {
            fr = new FileReader(filename);
            br = new BufferedReader(fr);
            
            String s;
            
            while ((s = br.readLine()) != null) {                
                System.out.println(s);
            }
        } catch (IOException e) {
            e.getMessage();
            // push
            
        } 
        
    }
    
}
