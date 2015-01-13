<?php
//create_user.php
include_once 'database_connection_config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
</head>
<body>
<?php
if(isset($_POST['add']))
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$firs_name = $_POST['firs_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];

		$sql = "INSERT INTO users ".
		       "(username,password, firs_name, last_name, email) ".
		       "VALUES('$username','$password','$firs_name', '$last_name', '$email');";
		
		mysql_select_db('crud');
		$retval = mysql_query( $sql, $conn );
			if(! $retval )
			{
			  die('Could not enter data: ' . mysql_error());
			}
		echo "Entered data successfully\n <br /><a href='index.php'><input type='button' value='Get Back to View Users'></a>";
		mysql_close($conn);
	}
else{
?>
<form method="post" action="<?php  $_SERVER['PHP_SELF'] ?>">
	<table width="400" border="0" cellspacing="1" cellpadding="2">
		<tr>
			<td width="100">Username</td>
			<td><input name="username" required type="text" id="username"></td>
		</tr>
		<tr>
			<td width="100">Password</td>
			<td><input name="password" required type="password" id="password"></td>
		</tr>
		<tr>
			<td width="100">First Name</td>
			<td><input name="firs_name" required type="text" id="firs_name"></td>
		</tr>
		<tr>
			<td width="100">Last Name</td>
			<td><input name="last_name" required type="text" id="last_name"></td>
		</tr>
		<tr>
			<td width="100">Email</td>
			<td><input name="email" required type="text" id="email"></td>
		</tr>
		<tr>
			<td width="100"> </td>
			<td> </td>
		</tr>
		<tr>
			<td width="100"> </td>
			<td>
			<input name="add" type="submit" id="add" value="Add User">
			</td>
		</tr>
	</table>
</form>
<?php
}
?>
</body>
</html>