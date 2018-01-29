package form_;

import form_.Action_ordering;
import javax.swing.JOptionPane;
/**
 *
 * @author aga
 */
public class Main_menu extends javax.swing.JFrame {

    public Main_menu() {
        initComponents();
        
    }
 
    
    
    
    
    
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jSeparator2 = new javax.swing.JSeparator();
        jPanel1 = new javax.swing.JPanel();
        jMenuBar1 = new javax.swing.JMenuBar();
        jMenu1 = new javax.swing.JMenu();
        jMenuUser = new javax.swing.JMenuItem();
        jMenuFac = new javax.swing.JMenuItem();
        jMenuVen = new javax.swing.JMenuItem();
        jMenuStaff = new javax.swing.JMenuItem();
        jSeparator3 = new javax.swing.JPopupMenu.Separator();
        jMenuExit = new javax.swing.JMenuItem();
        jMenuOrder = new javax.swing.JMenu();
        jMenuOrdering = new javax.swing.JMenuItem();
        jMenuSche = new javax.swing.JMenuItem();
        jMenuTrans = new javax.swing.JMenuItem();
        jSeparator1 = new javax.swing.JPopupMenu.Separator();
        jMenuHist = new javax.swing.JMenuItem();
        jMenu3 = new javax.swing.JMenu();
        jRadioButtonMenuItem1 = new javax.swing.JRadioButtonMenuItem();
        jRadioButtonMenuItem2 = new javax.swing.JRadioButtonMenuItem();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("MAIN MENU - EVENT ORGANIZER SYSTEM");

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 0, Short.MAX_VALUE)
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 703, Short.MAX_VALUE)
        );

        jMenu1.setText("File");

        jMenuUser.setText("Data User");
        jMenuUser.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuUserActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuUser);

        jMenuFac.setText("Data Facility");
        jMenuFac.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuFacActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuFac);

        jMenuVen.setText("Data Vendor");
        jMenuVen.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuVenActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuVen);

        jMenuStaff.setText("Data Staff");
        jMenuStaff.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuStaffActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuStaff);
        jMenu1.add(jSeparator3);

        jMenuExit.setText("Exit ...");
        jMenuExit.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuExitActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuExit);

        jMenuBar1.add(jMenu1);

        jMenuOrder.setText("Action");

        jMenuOrdering.setText("Ordering");
        jMenuOrdering.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuOrderingActionPerformed(evt);
            }
        });
        jMenuOrder.add(jMenuOrdering);

        jMenuSche.setText("Scheduling");
        jMenuSche.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuScheActionPerformed(evt);
            }
        });
        jMenuOrder.add(jMenuSche);

        jMenuTrans.setText("Transaction");
        jMenuOrder.add(jMenuTrans);
        jMenuOrder.add(jSeparator1);

        jMenuHist.setText("History Print Out ...");
        jMenuOrder.add(jMenuHist);

        jMenuBar1.add(jMenuOrder);

        jMenu3.setText("Help");

        jRadioButtonMenuItem1.setSelected(true);
        jRadioButtonMenuItem1.setText("All System Good");
        jMenu3.add(jRadioButtonMenuItem1);

        jRadioButtonMenuItem2.setSelected(true);
        jRadioButtonMenuItem2.setText("Have a Trouble ?");
        jMenu3.add(jRadioButtonMenuItem2);

        jMenuBar1.add(jMenu3);

        setJMenuBar(jMenuBar1);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jSeparator2, javax.swing.GroupLayout.DEFAULT_SIZE, 1366, Short.MAX_VALUE)
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
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jSeparator2, javax.swing.GroupLayout.PREFERRED_SIZE, 10, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(22, 22, 22))
        );

        jPanel1.getAccessibleContext().setAccessibleName("Main Menu by Skypion Project");

        getAccessibleContext().setAccessibleName("MAIN MENU By SKYPION PROJECT");

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jMenuUserActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuUserActionPerformed
        Data_user u = new Data_user();
        u.show();
        this.dispose();
    }//GEN-LAST:event_jMenuUserActionPerformed

    private void jMenuFacActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuFacActionPerformed
        Data_facility f = new Data_facility();
        f.show();
        this.dispose();
    }//GEN-LAST:event_jMenuFacActionPerformed

    private void jMenuVenActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuVenActionPerformed
        Data_vendor v = new Data_vendor();
        v.show();
        this.dispose();
    }//GEN-LAST:event_jMenuVenActionPerformed

    private void jMenuStaffActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuStaffActionPerformed
        Data_staff s = new Data_staff();
        s.show();
        this.dispose();
    }//GEN-LAST:event_jMenuStaffActionPerformed

        
    private void jMenuExitActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuExitActionPerformed
        int confirm = JOptionPane.showConfirmDialog(null, "Exit Program ?", "EXIT", JOptionPane.YES_NO_OPTION);
        if (confirm == JOptionPane.YES_OPTION) {
            dispose();
        }
    }//GEN-LAST:event_jMenuExitActionPerformed

    private void jMenuOrderingActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuOrderingActionPerformed
        Action_ordering ar = new Action_ordering();
        ar.show();
        this.dispose();
    }//GEN-LAST:event_jMenuOrderingActionPerformed

    private void jMenuScheActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuScheActionPerformed
        
    }//GEN-LAST:event_jMenuScheActionPerformed
  
    
    public static void main(String args[]) {  
        
      
        
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Main_menu().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JMenu jMenu1;
    private javax.swing.JMenu jMenu3;
    private javax.swing.JMenuBar jMenuBar1;
    private javax.swing.JMenuItem jMenuExit;
    private javax.swing.JMenuItem jMenuFac;
    private javax.swing.JMenuItem jMenuHist;
    private javax.swing.JMenu jMenuOrder;
    private javax.swing.JMenuItem jMenuOrdering;
    private javax.swing.JMenuItem jMenuSche;
    private javax.swing.JMenuItem jMenuStaff;
    private javax.swing.JMenuItem jMenuTrans;
    private javax.swing.JMenuItem jMenuUser;
    private javax.swing.JMenuItem jMenuVen;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JRadioButtonMenuItem jRadioButtonMenuItem1;
    private javax.swing.JRadioButtonMenuItem jRadioButtonMenuItem2;
    private javax.swing.JPopupMenu.Separator jSeparator1;
    private javax.swing.JSeparator jSeparator2;
    private javax.swing.JPopupMenu.Separator jSeparator3;
    // End of variables declaration//GEN-END:variables
}
