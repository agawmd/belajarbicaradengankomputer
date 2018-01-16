package message;

import java.io.Serializable;

/**
 *
 * @author aga
 */
public class RequestMessage implements Serializable {
    public double 
            a   = 0,
            b   = 0,
            c   = 0;
    
    public String toString() {
        return "Nilai Terbesar dari "+String.format("%2f", a) + "| Nilai Terbesar dari "+ String.format("%2f", b) + "| Nilai Terbesar dari "+ String.format("%2f", c);
    }
    
    
}