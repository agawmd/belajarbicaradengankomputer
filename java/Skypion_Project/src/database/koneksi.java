/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package database;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import javax.swing.JOptionPane;

/**
 *
 * @author aga
 */
public class koneksi {

    public void config() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://156.67.220.226/", "root", "1234");
            Statement stm = con.createStatement();
            ResultSet rs = stm.executeQuery("select * from db_skypion");
        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "Koneksi gagal !" + e.getMessage());
        }
    }
    
}
