package projet;


import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author liamsi
 */
public class Liaison {
    Connection con;
public Liaison(){
    try {
Class.forName("com.mysql.jdbc.Driver");
System.out.println("La base de donnée est chargée");
} 
catch(ClassNotFoundException e)
{
System.out.println(e);
}

try {
con=DriverManager.getConnection("jdbc:mysql://localhost:3306/etudiant","root","");// a la place de commande on met notre bdd
}
catch(SQLException e){System.out.println(e);}

}
Connection ObtenirConnexion()
{
    return con;
}


}
