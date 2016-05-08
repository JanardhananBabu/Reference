//STEP 1. Import required packages
import java.sql.*;

public class JDBCTest {
   // JDBC driver name and database URL
   static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";  
   static final String DB_URL = "jdbc:mysql://db4free.net:3306/hibernate_mytest";

   //  Database credentials
   static final String USER = "janabsrinivas";
   static final String PASS = "johnatus";
   
   public static void acting_main(String[] args) {
   Connection conn = null;
   Statement stmt = null;
   try{
      //STEP 2: Register JDBC driver
      Class.forName("com.mysql.jdbc.Driver");

      //STEP 3: Open a connection
      System.out.println("Connecting to database...");
      conn = DriverManager.getConnection(DB_URL, USER, PASS);

      //STEP 4: Execute a query
      System.out.println("Updating the values...");
      stmt = conn.createStatement();
      for(int i=8;i<10;i++) {
      String sql = "INSERT INTO USER VALUES ("+i+",'Test"+i+"','Test');";
      stmt.addBatch(sql);
      }
      stmt.executeBatch();
      System.out.println("Executed Batch successfully...");
   }catch(SQLException se){
      //Handle errors for JDBC
      se.printStackTrace();
   }catch(Exception e){
      //Handle errors for Class.forName
      e.printStackTrace();
   }finally{
      //finally block used to close resources
      try{
         if(stmt!=null)
            stmt.close();
      }catch(SQLException se2){
      }// nothing we can do
      try{
         if(conn!=null)
            conn.close();
      }catch(SQLException se){
         se.printStackTrace();
      }//end finally try
   }//end try
   System.out.println("Goodbye!");
}//end main
}//end JDBCExample
