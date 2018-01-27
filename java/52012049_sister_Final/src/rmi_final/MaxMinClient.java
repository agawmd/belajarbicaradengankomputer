
package rmi_final;

import java.rmi.Naming;

/**
 *
 * @author aga
 */
public class MaxMinClient {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        try {
            MaxMinInterface stub = (MaxMinInterface)Naming.lookup("rmi://localhost:5000");
            System.out.println(stub.Max(0, 0, 0));
            System.out.println(stub.Min(0, 0, 0));
        } catch (Exception e) {
            
        }
    }
    
}
