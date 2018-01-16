import java.util.Scanner;

public class Nilai {
    public static void main(String[] args) {
        Scanner masukan = new Scanner(System.in);
        
        int a = 0,
            b = 0,
            c = 0;
        
        System.out.println("");
        
        String min = "";
        String max = "";
        
        max = (jumlah(a,b) >= (jumlah(b,c))) ;
        
        System.out.println("");
        System.out.println("Mencari Nilai Terbesar");
        System.out.println("Nilai Pertama : " + a);
        System.out.println("Nilai Kedua : " + b);
        System.out.println("Nilai Ketiga : " + c);
        System.out.println("");
        System.out.println("Nilai Terbesar adalah = " + max);
        System.out.println("Nilai Terkecil adalah = " + min);
    }
    
    private static int jumlah(int a, int b, int c) {
        int hasil = a + b;

        return hasil;
    }
}