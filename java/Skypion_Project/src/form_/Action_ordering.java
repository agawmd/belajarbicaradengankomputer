package form_;

import database.koneksi;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.Vector;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author aga
 */
public class Action_ordering extends javax.swing.JFrame {

    public Action_ordering() {
        initComponents();        
        this.showAll();

    }

    String id, nama, type, price, status;

//    public Action_ordering(String id, String nama, String type, String price, String status) {
//        initComponents();
//        this.id=id;
//        this.nama=nama;
//        this.type=type;
//        this.price=price;
//        this.status=status;
//        
//        TambahData();
//        
//    }
//    
//    
//    void TambahData() {
//        
//        DefaultTableModel tb = (DefaultTableModel) jTable1.getModel();
//        Vector v = new Vector();
//        tb.addRow(v);
//        
//    }
    
    private void showAll() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/db_skypion?", "root", "1234");
            Statement st = (Statement) con.createStatement();

            String sql = "select num_id, name, type_service, price, value, status from tb_order";
            ResultSet result = st.executeQuery(sql);
            DefaultTableModel tb = (DefaultTableModel) jTable1.getModel();
//DefaultTableModel model = new DefaultTableModel(new String[]{"Class Name", "Home work", "Due Date"}, 0);
            while (result.next()) {
//                 id | name     | address | phone | email | date_order | type_service | value | price | num_id |

                String id = result.getString("num_id");
                String nama = result.getString("name");
                String type = result.getString("type_service");
                String price = result.getString("price");
                System.err.println(id);
                String status = result.getString("status");
/**
 * apa itu isinya kolom status
 */
                Vector v = new Vector();
                v.add(id);
                v.add(nama);
                v.add(type);
                v.add(price);
                v.add(result.getString("value"));
                v.add(status);
                System.out.println(v.toString());
                tb.addRow(v);
                /**
                 * bgitu? 1 2 3 mas4ih apa kan status di jtable nda masuk ke
                 * database sayang trus yg sayang bikin ini semua di ambil dp
                 * nilai dri database kan? io nah itu dia, jdi PR ma lgi untuk
                 * cari bgmna input biasa masuk ke jtable
                 *
                 * nda apa2, terima kasih ie.
                 */
            }
        } catch (Exception e) {
            System.err.println("Error: " + e.getMessage());
        }
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jSeparator2 = new javax.swing.JSeparator();
        jPanel1 = new javax.swing.JPanel();
        jTextField1 = new javax.swing.JTextField();
        jButton1 = new javax.swing.JButton();
        btnView = new javax.swing.JButton();
        btnNew = new javax.swing.JButton();
        jScrollPane2 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();
        btnBack = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("DATA ORDERING - EVENT ORGANIZER SYSTEM");
        setPreferredSize(new java.awt.Dimension(1366, 768));

        jButton1.setText("Looking");

        btnView.setText("View");
        btnView.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnViewActionPerformed(evt);
            }
        });

        btnNew.setText("New ...");
        btnNew.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnNewActionPerformed(evt);
            }
        });

        jTable1.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "ID", "User", "Service", "Price", "Value", "Status"
            }
        ));
        jScrollPane2.setViewportView(jTable1);

        btnBack.setText("Back To Main Menu");
        btnBack.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnBackActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(jScrollPane2)
                    .addGroup(javax.swing.GroupLayout.Alignment.LEADING, jPanel1Layout.createSequentialGroup()
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING, false)
                            .addComponent(btnBack, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(jTextField1, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, 307, Short.MAX_VALUE))
                        .addGap(18, 18, 18)
                        .addComponent(jButton1)
                        .addGap(18, 18, 18)
                        .addComponent(btnView, javax.swing.GroupLayout.PREFERRED_SIZE, 86, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 741, Short.MAX_VALUE)
                        .addComponent(btnNew, javax.swing.GroupLayout.PREFERRED_SIZE, 86, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap())
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addComponent(btnBack)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jTextField1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jButton1)
                    .addComponent(btnNew)
                    .addComponent(btnView))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jScrollPane2, javax.swing.GroupLayout.DEFAULT_SIZE, 626, Short.MAX_VALUE)
                .addGap(12, 12, 12))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jSeparator2, javax.swing.GroupLayout.DEFAULT_SIZE, 1000, Short.MAX_VALUE)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jSeparator2, javax.swing.GroupLayout.PREFERRED_SIZE, 10, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(22, 22, 22))
        );

        getAccessibleContext().setAccessibleName("ORDERING LAYOUT");

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btnViewActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnViewActionPerformed
        Action_viewordering vw = new Action_viewordering();
        vw.setVisible(true);
    }//GEN-LAST:event_btnViewActionPerformed

    private void btnNewActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnNewActionPerformed
        Action_addorder an = new Action_addorder();
        an.setVisible(true);
        this.dispose();
    }//GEN-LAST:event_btnNewActionPerformed

    private void btnBackActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnBackActionPerformed
        Main_menu m = new Main_menu();
        m.setVisible(true);
        this.dispose();
    }//GEN-LAST:event_btnBackActionPerformed

    public static void main(String args[]) {
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Action_ordering().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnBack;
    private javax.swing.JButton btnNew;
    private javax.swing.JButton btnView;
    private javax.swing.JButton jButton1;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JSeparator jSeparator2;
    private javax.swing.JTable jTable1;
    private javax.swing.JTextField jTextField1;
    // End of variables declaration//GEN-END:variables
}
