package overloading;

/**
 *
 * @author aga
 */
public class Overloading {

    public void tambah1() {
        int a=5; int b=10;
        System.out.println("Hasil Penjumlahan dari metode pertama ke-1 = "+(a+b));
    }
    
    //Metode kedua di overloading dengan 2 parameter
    public void tambah1(int x, int y) {
        System.out.println("Hasil Penjumlahan dari metode kedua ke-2 = "+(x+y));
    }
    
    
    public static void main(String[] args) {
        Overloading pp;
        pp = new Overloading();
        pp.tambah1();//memanggil metode pertama
        pp.tambah1(5, 5);//memanggil metode kedua
    }
    
}
