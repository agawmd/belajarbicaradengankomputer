package message;

import java.io.Serializable;

/**
 *
 * @author aga
 */
public class RequestMessage implements Serializable{
    public double 
            a,
            b,
            c;
    
    public RequestMessage(double a, double b, double c) {
        this.a=a;
        this.b=b;
        this.c=c;
    }
    
    public double getA () {
        return(a);
    }
    
    public double getB () {
        return(b);
    }
    
    public double getC () {
        return(c);
    }
    
}
