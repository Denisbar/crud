<?php
$host = "localhost";
$u = "root";
$pass = "8169x5it";
$conn = mysql_connect($host,$u,$pass);
if(!$conn){
die("Error" . mysql_error());
}
echo "Connection ok";