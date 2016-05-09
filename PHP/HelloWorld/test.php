<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
foreach ($_SESSION["arr"] as $value) {
 	echo "$value<br>"; } 
echo "I Love PHP !!<br><br>";


?>
</body>
</html>
