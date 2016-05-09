<?php
// This is a sample code in case you wish to check the username from a mysql db table
        $servername = "db4free.net:3306";
        $username = "janabsrinivas";
        $password = "johnatus";
        $dbname = "hibernate_mytest";
          // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['email'])) {
  $email = trim($_POST['email']);
   $sqlSelectEmail = "select email from Customer where email='".$email."'";
  if (($result = $conn->query($sqlSelectEmail)) !== FALSE) {
      if(empty($result->fetch_assoc())) {
        echo 'OK';
      }
  }
}
$conn->close();
?>