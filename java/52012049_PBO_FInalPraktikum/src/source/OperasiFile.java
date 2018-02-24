/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package source;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;

/**
 *
 * @author aga
 */
public class OperasiFile {

    /**
     * @param args the command line arguments
     */
    
    
    double a, b ;
    
    private static final String filename = "Z:/data.dat";
    
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

    public static void main(String[] args) throws IOException {
        String ini = new String(Files.readAllBytes(Paths.get(filename)));
        
        Files.lines(new File);

    
    public String getData() {
    
        String result = "";
               
        
        System.out.println("lala");
        try {
            BufferedReader br = null;
            FileReader fr = null;
            fr = new FileReader(filename);
            br = new BufferedReader(fr);
            
            String s;
            
            while ((s = br.readLine()) != null) {                
                System.out.println(s);    
                
                String[] n = s.split(" ");                
                double p = Double.parseDouble(n[0]);
                double l = Double.parseDouble(n[1]);
                
                double luas = getLuas(p, l);
                double keli = getKeliling(p, l);

                result = result 
                        + "panjang  = "+ n[0] +"\n"
                        + "lebar    = "+ n[1] +"\n"
                        + "Keliling = "+ String.valueOf(keli) +"\n"
                        + "Luas     = "+ String.valueOf(luas)
                        + "\n------------------\n";
                                
                
            }
        } catch (IOException e) {
            e.getMessage();
        } 
       
        return result;
    }
}
