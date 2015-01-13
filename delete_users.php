<?php
include_once 'database_connection_config.php';

$select = mysql_select_db("crud",$conn) or die ("No connection");

$delete = $_GET['id'];

$result = mysql_query("TRUNCATE TABLE users");
	if($result === FALSE)
	{
	    die(mysql_error());
	}else
	{
		header("Location: index.php");
	}

mysql_close($conn);
?>