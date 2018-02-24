package hewan;

/**
 *
 * @author aga
 */
public class Kucing {

    static String nama;
    String warna;
    int umur;
    
    public Kucing(String n) {
        this.nama=n;
    }
   
    void miaw() {
    }
    
    void lapar() {
    }
    
    void tidur() {
    }    
    public static void main(String[] args) {
        Kucing pertama = new Kucing("theo");
        System.out.println("Nama kucing saya adalah " + nama);
    }
    
}
