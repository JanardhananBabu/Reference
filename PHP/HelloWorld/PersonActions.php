<?php

try
{
	  $servername = "db4free.net:3306";
      $username = "janabsrinivas";
      $password = "johnatus";
      $dbname = "hibernate_mytest";
	//Open database connection
	$con = mysql_connect($servername, $username, $password);
	mysql_select_db("hibernate_mytest", $con);
	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
		//Get records from database
		$result = mysql_query("SELECT * FROM Wish_List WHERE customer_id = '1';");
		
		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM Wish_List WHERE wish_id =".filter_var( $_POST["wish_id"], FILTER_VALIDATE_INT).";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	else if($_GET["action"] == "book")
	{
		if($_POST["wish_list"]=='Appointment-1'){
			$appTime='col1';	
		}
		else if($_POST["wish_list"]=='Appointment-2') {
			$appTime='col2';
		}
		else if($_POST["wish_list"]=='Appointment-3') {
			$appTime='col3';
		}
		else if($_POST["wish_list"]=='Appointment-4') {
			$appTime='col4';
		}
		else if($_POST["wish_list"]=='Appointment-5') {
			$appTime='col5';
		}
		else if($_POST["wish_list"]=='Appointment-6') {
			$appTime='col6';
		}
		else if($_POST["wish_list"]=='Appointment-7') {
			$appTime='col7';
		}
		else if($_POST["wish_list"]=='Appointment-8') {
			$appTime='col8';
		}
			$sql_check1 = mysql_query("SELECT * FROM Appointments WHERE customer_id= '1' AND appointment_date= '".$_POST["date"]."'") or die(mysql_error());
 			if(mysql_num_rows($sql_check1)) {
 				echo 'BA';
 			}
 			else {
 				$sql_check2 = mysql_query("SELECT * FROM Appointment_Dates WHERE date= '".$_POST["date"]."' AND ".$appTime."=1") or die(mysql_error());
	 			if(mysql_num_rows($sql_check2)) {
	 				echo 'NF';
	 			}
	 			else {
	 				$insertResult = mysql_query("INSERT INTO Appointments VALUES('1','".$_POST["date"]."','".$appTime."')") or die(mysqli_error());
					$deleteResult = mysql_query("DELETE FROM Wish_List WHERE wish_id =".filter_var( $_POST["wish_id"], FILTER_VALIDATE_INT).";") or die(mysql_error());
					echo 'OK';			      
				}		      
			}
	}

	//Close database connection
	mysql_close($con);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
	
?>