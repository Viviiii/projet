/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet;


import java.sql.*;
import javax.swing.*;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author Victor
 */
public class gestion_prof extends javax.swing.JFrame {

    /**
     * Creates new form gestion_prof
     */
    Liaison con= new Liaison();
    Statement stm;
    ResultSet Rs;
    DefaultTableModel table_prof= new DefaultTableModel();
    public gestion_prof() {
        initComponents();
       table_prof.addColumn("ID");
        table_prof.addColumn("nom");
        table_prof.addColumn("prenom");
       
        try
        {
            stm=con.ObtenirConnexion().createStatement();
            ResultSet Rs=stm.executeQuery("Select * from personne where type like 2");///Nom de la table de la BDD
            while(Rs.next())
            {
                table_prof.addRow(new Object[]{Rs.getString("ID"),Rs.getString("nom"),Rs.getString("prenom"),Rs.getString("type")});
            }
            
        }
        catch(Exception e)
        {
            System.out.println(e);
        }
        tableau_etud.setModel(table_prof);
    }


    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel3 = new javax.swing.JPanel();
        jLabel5 = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        jLabel8 = new javax.swing.JLabel();
        txtid = new javax.swing.JTextField();
        txtpr = new javax.swing.JTextField();
        txtno = new javax.swing.JTextField();
        jPanel4 = new javax.swing.JPanel();
        jScrollPane2 = new javax.swing.JScrollPane();
        tableau_etud = new javax.swing.JTable();
        jButton1 = new javax.swing.JButton();
        jButton2 = new javax.swing.JButton();
        jButton3 = new javax.swing.JButton();
        jButton5 = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();

        getContentPane().setLayout(null);

        jPanel3.setLayout(null);

        jLabel5.setFont(new java.awt.Font("Times New Roman", 0, 14)); // NOI18N
        jLabel5.setText("ID                :");
        jPanel3.add(jLabel5);
        jLabel5.setBounds(36, 40, 90, 26);

        jLabel7.setFont(new java.awt.Font("Times New Roman", 0, 14)); // NOI18N
        jLabel7.setText("Prénom          :");
        jPanel3.add(jLabel7);
        jLabel7.setBounds(30, 80, 110, 26);

        jLabel8.setFont(new java.awt.Font("Times New Roman", 0, 14)); // NOI18N
        jLabel8.setText(" Nom             :");
        jPanel3.add(jLabel8);
        jLabel8.setBounds(30, 120, 90, 26);

        txtid.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                txtidActionPerformed(evt);
            }
        });
        jPanel3.add(txtid);
        txtid.setBounds(190, 50, 70, 20);

        txtpr.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                txtprActionPerformed(evt);
            }
        });
        jPanel3.add(txtpr);
        txtpr.setBounds(190, 90, 70, 20);
        jPanel3.add(txtno);
        txtno.setBounds(190, 130, 70, 20);

        getContentPane().add(jPanel3);
        jPanel3.setBounds(110, 90, 400, 330);

        tableau_etud.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null},
                {null, null, null, null},
                {null, null, null, null},
                {null, null, null, null}
            },
            new String [] {
                "ID", "Nom", "Prenom", "Type"
            }
        ));
        jScrollPane2.setViewportView(tableau_etud);

        javax.swing.GroupLayout jPanel4Layout = new javax.swing.GroupLayout(jPanel4);
        jPanel4.setLayout(jPanel4Layout);
        jPanel4Layout.setHorizontalGroup(
            jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jScrollPane2, javax.swing.GroupLayout.DEFAULT_SIZE, 390, Short.MAX_VALUE)
        );
        jPanel4Layout.setVerticalGroup(
            jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel4Layout.createSequentialGroup()
                .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, 249, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(0, 71, Short.MAX_VALUE))
        );

        getContentPane().add(jPanel4);
        jPanel4.setBounds(560, 100, 390, 320);

        jButton1.setFont(new java.awt.Font("Times New Roman", 0, 18)); // NOI18N
        jButton1.setText("Inscrire");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton1);
        jButton1.setBounds(200, 460, 120, 31);

        jButton2.setFont(new java.awt.Font("Times New Roman", 0, 18)); // NOI18N
        jButton2.setText("Modifier");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton2);
        jButton2.setBounds(200, 500, 120, 30);

        jButton3.setFont(new java.awt.Font("Times New Roman", 0, 18)); // NOI18N
        jButton3.setText("Actualiser");
        jButton3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton3ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton3);
        jButton3.setBounds(370, 460, 120, 31);

        jButton5.setFont(new java.awt.Font("Times New Roman", 0, 18)); // NOI18N
        jButton5.setText("Supprimer");
        jButton5.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton5ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton5);
        jButton5.setBounds(370, 500, 120, 30);

        jLabel1.setFont(new java.awt.Font("Times New Roman", 0, 48)); // NOI18N
        jLabel1.setText("Gestion des enseignants");
        getContentPane().add(jLabel1);
        jLabel1.setBounds(290, 30, 460, 50);
    }// </editor-fold>//GEN-END:initComponents

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        // TODO add your handling code here:
        String Id=txtid.getText();
          String Nom=txtno.getText();
        String Prenom=txtpr.getText();

String req="INSERT INTO personne(ID,nom,prenom,type)VALUES('"+Id+"','"+Nom+"','"+Prenom+"','2')";
try { 
    stm=con.ObtenirConnexion().createStatement();

    stm.executeUpdate(req);
        //stm.executeUpdate(req1);
    JOptionPane.showMessageDialog(null,"Requête exécutée");
    txtno.setText("");
    txtpr.setText("");
    actualiser();

}
catch(SQLException e){
    System.err.println(e);
JOptionPane.showMessageDialog(null,"Ce numéro d'Id est déjà attribué, veuillez en choisir un autre ");
}
    }//GEN-LAST:event_jButton1ActionPerformed
    ///Modifier un étudiant
    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        // TODO add your handling code here:
        try
        {
            if(JOptionPane.showConfirmDialog(null,"Confirmez la modification ?","modification",JOptionPane.YES_NO_OPTION)== JOptionPane.OK_OPTION)
            {
                stm.executeUpdate("UPDATE personne SET nom='"+txtno.getText()+"',prenom='"+txtpr.getText()+"',type='2'"+"where ID like "+txtid.getText());
            }
        }catch(Exception e)
                {
                    JOptionPane.showMessageDialog(null,"Erreur"+e.getMessage());
                }
        
        actualiser();
    }//GEN-LAST:event_jButton2ActionPerformed
    ///Actualiser la liste des étudiants
    private void jButton3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton3ActionPerformed
        // TODO add your handling code here:
          actualiser();
    }//GEN-LAST:event_jButton3ActionPerformed

    private void txtidActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_txtidActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_txtidActionPerformed

    private void txtprActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_txtprActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_txtprActionPerformed
    ///Supprimer un étudiant de la liste
    private void jButton5ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton5ActionPerformed
        // TODO add your handling code here:
         try
        {
            if(JOptionPane.showConfirmDialog(null,"Confirmez la suppression de l'enseignant ?","suppression",JOptionPane.YES_NO_OPTION)== JOptionPane.OK_OPTION)
            {
                stm.executeUpdate("DELETE from personne WHERE ID="+txtid.getText());
            }
        }catch(Exception e)
                {
                    JOptionPane.showMessageDialog(null,"Erreur"+e.getMessage());
                }
         actualiser();
        
    }//GEN-LAST:event_jButton5ActionPerformed

    
    //fonction actualiser prof
    public void actualiser(){
        try
        {
            table_prof.setRowCount(0);
            stm=con.ObtenirConnexion().createStatement();
            ResultSet Rs=stm.executeQuery("Select * from personne where type like 2");///Nom de la table de la BDD
            while(Rs.next())
            {
                table_prof.addRow(new Object[]{Rs.getString("ID"),Rs.getString("nom"),Rs.getString("prenom")});
            }
            
        }
        catch(Exception e)
        {
            System.out.println(e);
        }
        tableau_etud.setModel(table_prof);
    }
    
public static void main (String args[])
{
    java.awt.EventQueue.invokeLater(new Runnable(){
 
   public void run()
   {
       new gestion_prof().setVisible(true);
   }
    });
}
    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JButton jButton3;
    private javax.swing.JButton jButton5;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JPanel jPanel4;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JTable tableau_etud;
    private javax.swing.JTextField txtid;
    private javax.swing.JTextField txtno;
    private javax.swing.JTextField txtpr;
    // End of variables declaration//GEN-END:variables

}