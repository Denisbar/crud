<?php
$ID = $_REQUEST["id"];
$username = $_POST["username"];
$password = $_POST["password"];
$firs_name = $_POST["firs_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];

include_once 'database_connection_config.php';

mysql_select_db("crud",$conn) or die(mysql_error());
echo "Data CRUD is ok! <br>";

$query = "UPDATE users SET username = '$username', password = '$password', 
firs_name = '$firs_name', last_name = '$last_name', email = '$email' WHERE id = '$ID'";

$res = mysql_query($query);
	if($res === TRUE)
	{
		header("Location: index.php");
		//echo "DATA is in database. Request is successful. <br/> <a href='index.php'>Please view result>>></a>";
	}else
	{ 
		echo "Error.";
	}