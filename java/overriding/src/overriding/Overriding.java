package overriding;

/**
 *
 * @author aga
 */
public class Overriding {

    public void Sapa() {
        System.out.println("Waode Makani Daga");
    }
    
    public static void main(String[] args) {
        Kenal ss;
        Overriding oo;
        ss = new Kenal();
        oo = new Overriding();
        
        ss.Sapa();//memanggil metode Sapa() pada class Kenal
        oo.Sapa();//memanggil metode Sapa() pada class Overloading
        
    }
    
}
