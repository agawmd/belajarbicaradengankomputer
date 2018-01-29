package form_;

import javax.swing.JOptionPane;
import database.koneksi;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.util.Arrays;
import javax.swing.ButtonGroup;
import javax.swing.JComboBox;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author aga
 */
public class Action_addorder extends javax.swing.JFrame {

    public Action_addorder() {
        initComponents();
        groupButton();
        groupButton1();

    }

    private void groupButton() {
        ButtonGroup bg1 = new ButtonGroup();
        bg1.add(rbFac);
        bg1.add(rbVen);

    }

    private void groupButton1() {
        ButtonGroup bg2 = new ButtonGroup();
        bg2.add(rbCash);
        bg2.add(rbDp);
    }

    private void updateBillStatus() {
        String ID = txNum.getText();
        String Name = txName.getText();
        String Address = txAdd.getText();
        String Phone = txPhone.getText();
        String Mail = txEmail.getText();
        String radioText = "";
        int price1 = 500000;
        int price2 = 2000000;

        if (rbFac.isSelected()) {
            radioText = rbFac.getText();
            String pri = Integer.toString(price1);
            txPrice.setText("" + price1);
        } else if (rbVen.isSelected()) {
            radioText = rbVen.getText();
            String pri = Integer.toString(price2);
            txPrice.setText("" + price2);

        }
        String cbBox = (String) cbPack.getSelectedItem();

        String model = (String) dtSch.getDateStringOrEmptyString();

        taShow.setText(
                  "ID             : " + ID
                + "\nNama         : " + Name
                + "\nAddress      : " + Address
                + "\nPhone Number : " + Phone
                + "\nEmail        : " + Mail
                + "\nService Type : " + radioText
                + "\nPackage      : " + cbBox
                + "\nOrder Date   : " + model
        );
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jCalendar1 = new com.toedter.calendar.JCalendar();
        jPanel1 = new javax.swing.JPanel();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();
        jLabel6 = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        txNum = new javax.swing.JTextField();
        txName = new javax.swing.JTextField();
        txAdd = new javax.swing.JTextField();
        txEmail = new javax.swing.JTextField();
        txPhone = new javax.swing.JTextField();
        jLabel8 = new javax.swing.JLabel();
        jLabel9 = new javax.swing.JLabel();
        rbFac = new javax.swing.JRadioButton();
        rbVen = new javax.swing.JRadioButton();
        jLabel11 = new javax.swing.JLabel();
        jLabel12 = new javax.swing.JLabel();
        btnBack = new javax.swing.JButton();
        cbPack = new javax.swing.JComboBox<>();
        jLabel14 = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        taShow = new javax.swing.JTextArea();
        dtSch = new com.github.lgooddatepicker.components.DatePicker();
        txPrice = new javax.swing.JLabel();
        btnConfirm = new javax.swing.JButton();
        jLabel2 = new javax.swing.JLabel();
        rbCash = new javax.swing.JRadioButton();
        rbDp = new javax.swing.JRadioButton();
        jLabel1 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Adding Data Order");
        setPreferredSize(new java.awt.Dimension(1366, 768));

        jLabel3.setText("ID CARD");
        jLabel3.setEnabled(false);

        jLabel4.setText("NAME");

        jLabel5.setText("ADDRESS");

        jLabel6.setText("PHONE");

        jLabel7.setText("EMAIL");

        txNum.setFont(new java.awt.Font("Dialog", 1, 14)); // NOI18N
        txNum.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                txNumActionPerformed(evt);
            }
        });
        txNum.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                updateOnKeyRelease(evt);
            }
        });

        txName.setFont(new java.awt.Font("Dialog", 1, 14)); // NOI18N
        txName.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                txNameKeyReleased(evt);
            }
        });

        txAdd.setFont(new java.awt.Font("Dialog", 1, 14)); // NOI18N
        txAdd.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                txAddKeyReleased(evt);
            }
        });

        txEmail.setFont(new java.awt.Font("Dialog", 1, 14)); // NOI18N
        txEmail.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                txEmailKeyReleased(evt);
            }
        });

        txPhone.setFont(new java.awt.Font("Dialog", 1, 14)); // NOI18N
        txPhone.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                txPhoneKeyReleased(evt);
            }
        });

        jLabel8.setText("SCHEDULE");

        jLabel9.setText("TYPE SERVICE");

        rbFac.setSelected(true);
        rbFac.setText("FACILITY");
        rbFac.addChangeListener(new javax.swing.event.ChangeListener() {
            public void stateChanged(javax.swing.event.ChangeEvent evt) {
                rbFacStateChanged(evt);
            }
        });
        rbFac.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                rbFacActionPerformed(evt);
            }
        });

        rbVen.setText("VENDOR");
        rbVen.addChangeListener(new javax.swing.event.ChangeListener() {
            public void stateChanged(javax.swing.event.ChangeEvent evt) {
                rbVenStateChanged(evt);
            }
        });

        jLabel11.setText("PACKAGE");

        jLabel12.setText("DETAILS ORDER");

        btnBack.setText("Back");
        btnBack.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnBackActionPerformed(evt);
            }
        });

        cbPack.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Full Time", "Part Time", "Certain Time" }));
        cbPack.addItemListener(new java.awt.event.ItemListener() {
            public void itemStateChanged(java.awt.event.ItemEvent evt) {
                cbPackItemStateChanged(evt);
            }
        });
        cbPack.addPropertyChangeListener(new java.beans.PropertyChangeListener() {
            public void propertyChange(java.beans.PropertyChangeEvent evt) {
                cbPackPropertyChange(evt);
            }
        });

        jLabel14.setText("PAYMENT");

        taShow.setColumns(20);
        taShow.setRows(5);
        taShow.setEnabled(false);
        taShow.setFont(new java.awt.Font("Nimbus Mono L", 0, 18)); // NOI18N
        jScrollPane1.setViewportView(taShow);

        dtSch.addPropertyChangeListener(new java.beans.PropertyChangeListener() {
            public void propertyChange(java.beans.PropertyChangeEvent evt) {
                dtSchPropertyChange(evt);
            }
        });

        txPrice.setFont(new java.awt.Font("Dialog", 1, 36)); // NOI18N
        txPrice.setPreferredSize(new java.awt.Dimension(300, 60));

        btnConfirm.setText("Confirm");
        btnConfirm.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnConfirmActionPerformed(evt);
            }
        });

        jLabel2.setText("Status ");

        rbCash.setSelected(true);
        rbCash.setText("CASH");

        rbDp.setText("DOWN PAYMENT");

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(jLabel7)
                            .addComponent(jLabel6)
                            .addComponent(jLabel5)
                            .addComponent(jLabel4)
                            .addComponent(jLabel3))
                        .addGap(18, 18, 18)
                        .addComponent(txNum, javax.swing.GroupLayout.PREFERRED_SIZE, 225, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addComponent(txName, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, 225, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(txAdd, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, 225, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(txPhone, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, 225, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(txEmail, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, 225, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(jLabel11)
                            .addComponent(jLabel9)
                            .addComponent(jLabel8))
                        .addGap(18, 18, 18)
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(cbPack, 0, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(dtSch, javax.swing.GroupLayout.DEFAULT_SIZE, 225, Short.MAX_VALUE)
                            .addGroup(jPanel1Layout.createSequentialGroup()
                                .addComponent(rbFac)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                .addComponent(rbVen)))))
                .addGap(121, 121, 121)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(jLabel14)
                    .addComponent(jLabel12)
                    .addComponent(jLabel2))
                .addGap(66, 66, 66)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(rbCash)
                        .addGap(33, 33, 33)
                        .addComponent(rbDp))
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 540, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(btnBack)
                        .addGap(397, 397, 397)
                        .addComponent(btnConfirm))
                    .addComponent(txPrice, javax.swing.GroupLayout.PREFERRED_SIZE, 370, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(531, 531, 531))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGap(82, 82, 82)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(jScrollPane1)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(txNum, javax.swing.GroupLayout.PREFERRED_SIZE, 35, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel3)
                            .addComponent(jLabel12))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(txName, javax.swing.GroupLayout.PREFERRED_SIZE, 35, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel4))
                        .addGap(18, 18, 18)
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(txAdd, javax.swing.GroupLayout.PREFERRED_SIZE, 35, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel5))
                        .addGap(18, 18, 18)
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(txPhone, javax.swing.GroupLayout.PREFERRED_SIZE, 35, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel6))
                        .addGap(18, 18, 18)
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(txEmail, javax.swing.GroupLayout.PREFERRED_SIZE, 35, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel7))))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 30, Short.MAX_VALUE)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jLabel8)
                    .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                        .addComponent(dtSch, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addComponent(jLabel2)
                        .addComponent(rbCash)
                        .addComponent(rbDp)))
                .addGap(17, 17, 17)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                        .addComponent(rbFac)
                        .addComponent(rbVen)
                        .addComponent(jLabel9)
                        .addComponent(jLabel14))
                    .addComponent(txPrice, javax.swing.GroupLayout.PREFERRED_SIZE, 50, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btnBack)
                    .addComponent(btnConfirm)
                    .addComponent(cbPack, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel11))
                .addGap(81, 81, 81))
        );

        jLabel1.setText("Add Order");
        jLabel1.setFont(new java.awt.Font("Dialog", 1, 36)); // NOI18N

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(51, 51, 51)
                .addComponent(jLabel1)
                .addContainerGap(1117, Short.MAX_VALUE))
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, 1366, Short.MAX_VALUE)
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(49, 49, 49)
                .addComponent(jLabel1)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btnBackActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnBackActionPerformed
        Action_ordering or = new Action_ordering();
        or.setVisible(true);
        this.dispose();
    }//GEN-LAST:event_btnBackActionPerformed

    private void rbFacActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_rbFacActionPerformed
        this.updateBillStatus();
    }//GEN-LAST:event_rbFacActionPerformed

    private void txNumActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_txNumActionPerformed
        this.updateBillStatus();
    }//GEN-LAST:event_txNumActionPerformed

    private void btnConfirmActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnConfirmActionPerformed

        String iD = txNum.getText();
        String name = txName.getText();
        String address = txAdd.getText();
        String phone = txPhone.getText();
        String mail = txEmail.getText();

        String model = (String) dtSch.getDateStringOrEmptyString();

        String radioText = "";
        String price = "";
        if (rbFac.isSelected()) {
            radioText = rbFac.getText();
            price = "500000";
        } else if (rbVen.isSelected()) {
            radioText = rbVen.getText();
            price = "2000000";
        }

        String pilih = (String) cbPack.getSelectedItem();

        String status = "";
        if (rbCash.isSelected()) {
            status = rbCash.getText();
        } else if (rbDp.isSelected()) {
            status = rbDp.getText();
        }

        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/db_skypion?", "root", "1234");
            Statement st = (Statement) con.createStatement();

            String insert = "insert into tb_order (`name`, `address`,`phone`, `email`, `date_order`,`type_service`, `value`, `price`, `num_id`, `status`) values ('"
                    + name + "','" + address + "','" + phone + "','" + mail + "', '" + model + "', '" + radioText + "', '" + pilih + "', '" + price + "', '" + iD + "', '" + status + "');";
            st.executeUpdate(insert);

            Action_ordering or = new Action_ordering();
            or.setVisible(true);
            this.dispose();
        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, e.getMessage(), "Error", 1);

//        new Action_ordering(id, name, radioText, price, status).setVisible(true);    
// jalankan
        }


    }//GEN-LAST:event_btnConfirmActionPerformed

    private void updateOnKeyRelease(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_updateOnKeyRelease
        this.updateBillStatus();
    }//GEN-LAST:event_updateOnKeyRelease

    private void txNameKeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_txNameKeyReleased
        this.updateBillStatus();
    }//GEN-LAST:event_txNameKeyReleased

    private void txAddKeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_txAddKeyReleased
        this.updateBillStatus();
    }//GEN-LAST:event_txAddKeyReleased

    private void txPhoneKeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_txPhoneKeyReleased
        this.updateBillStatus();
    }//GEN-LAST:event_txPhoneKeyReleased

    private void txEmailKeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_txEmailKeyReleased
        this.updateBillStatus();
    }//GEN-LAST:event_txEmailKeyReleased

    private void rbFacStateChanged(javax.swing.event.ChangeEvent evt) {//GEN-FIRST:event_rbFacStateChanged
        this.updateBillStatus();
    }//GEN-LAST:event_rbFacStateChanged

    private void rbVenStateChanged(javax.swing.event.ChangeEvent evt) {//GEN-FIRST:event_rbVenStateChanged
        this.updateBillStatus();
    }//GEN-LAST:event_rbVenStateChanged

    private void cbPackPropertyChange(java.beans.PropertyChangeEvent evt) {//GEN-FIRST:event_cbPackPropertyChange
        this.updateBillStatus();
    }//GEN-LAST:event_cbPackPropertyChange

    private void dtSchPropertyChange(java.beans.PropertyChangeEvent evt) {//GEN-FIRST:event_dtSchPropertyChange
        this.updateBillStatus();
    }//GEN-LAST:event_dtSchPropertyChange

    private void cbPackItemStateChanged(java.awt.event.ItemEvent evt) {//GEN-FIRST:event_cbPackItemStateChanged
        this.updateBillStatus();

    }//GEN-LAST:event_cbPackItemStateChanged

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Action_addorder.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Action_addorder.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Action_addorder.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Action_addorder.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            @Override
            public void run() {
                new Action_addorder().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnBack;
    private javax.swing.JButton btnConfirm;
    private javax.swing.JComboBox<String> cbPack;
    private com.github.lgooddatepicker.components.DatePicker dtSch;
    private com.toedter.calendar.JCalendar jCalendar1;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel11;
    private javax.swing.JLabel jLabel12;
    private javax.swing.JLabel jLabel14;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JLabel jLabel9;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JRadioButton rbCash;
    private javax.swing.JRadioButton rbDp;
    private javax.swing.JRadioButton rbFac;
    private javax.swing.JRadioButton rbVen;
    private javax.swing.JTextArea taShow;
    private javax.swing.JTextField txAdd;
    private javax.swing.JTextField txEmail;
    private javax.swing.JTextField txName;
    private javax.swing.JTextField txNum;
    private javax.swing.JTextField txPhone;
    private javax.swing.JLabel txPrice;
    // End of variables declaration//GEN-END:variables
}
