package personal;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.PreparedStatement;
import com.mysql.jdbc.Statement;
import java.sql.DriverManager;
import java.sql.ResultSet;

/**
 *
 * @author aga
 */
public class OperasiMySQL {
    Connection conn = null;
    String url = "localhost";
    String dbName = "test";
    String driver = "com.mysql.jdbc.Driver";
    String userName = "root";
    String password = "1234";
    private Statement statement = null;
    private PreparedStatement preparedStatement = null;
    private ResultSet resultSet = null;
    
    
    public void insertData(Person p) {
        try {
            Class.forName(driver).newInstance();
            conn = (Connection) DriverManager.getConnection(url+dbName,userName,password);
            statement = (Statement) conn.createStatement();
            preparedStatement = (PreparedStatement) conn.prepareStatement("insert into Personal values (?.?)");
            preparedStatement.setString(2,p.getNama());
            preparedStatement.executeUpdate();
            conn.close();
        } catch (Exception e) {
            System.out.println("NO CONNECTION =( ");
        }
    }
    
}
