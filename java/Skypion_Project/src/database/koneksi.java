/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package database;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.Properties;

/**
 * 156.67.220.226 IP server active
 * @author aga
 */
public class koneksi {
    private final String username;
    private final int password;
    private String root;

    public koneksi() {
        this.username = root;
        this.password = 1234;
    }
    
    public Connection GetConnection() throws SQLException {
        Connection  conn = null;
        Properties connectionProps = new Properties();
        connectionProps.put("user", this.username);
        connectionProps.put("password", this.password);
        
        if (this.dbms.equals("mysql")) {
            conn = DriverManager.getConnection("jdbc:" + this.dbms + "://" + this.serverName + )
        } else {
        }
        
    }
    
}
