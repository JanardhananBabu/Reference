<?php
// Start the session
session_start();
?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

echo "Hello World !!! <br> Learn it , Understand it ! <br><br>";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

foreach ($a as $value) {
	echo "$value <br>";
}

$servername = "db4free.net:3306/";
$username = "janabsrinivas";
$password = "johnatus";
$dbname = "hibernate_mytest";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
} 
else {
	echo "Connected successfully<br>";
}
$_SESSION["arr"]=$a;
echo "<form action='test.php' method='get'>";
echo "<button type='submit'> Submit</button>";
echo "</form>";

?>

</body>
</html>
