/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package database;

import class_pack.Order;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;



/**
 * 156.67.220.226 IP server active
 * @author aga
 */
public class koneksi {
    
    
        
    public Connection getConnection() {
        Connection con = null;
        
        try {
            con = DriverManager.getConnection("jdbc:mysql://localhost/db_skypion", "root", "1234");
            Statement stmt = con.createStatement();
            JOptionPane.showMessageDialog(null, "Connected");
            return con;
        } catch (SQLException ex) {
            Logger.getLogger(Order.class.getName()).log(Level.SEVERE, null, ex);
            JOptionPane.showMessageDialog(null, "Not Connected");
            return null;
        }
        
    }    
    
    
    public static void main(String[] args) {
        
    }
    
}
