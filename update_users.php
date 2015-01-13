<?php
include_once 'database_connection_config.php';

$select = mysql_select_db("crud",$conn) or die ("No connection");

$update = $_GET['id'];

$result = mysql_query("select * from users where id = $update");
	if($result === FALSE)
	{
	    die(mysql_error());
	}

$row = mysql_fetch_assoc($result);
mysql_close($conn);
?>

<form method="post" action="update.php">
	<table width="400" border="0" cellspacing="1" cellpadding="2">
		<tr>
			<td width="100">ID</td>
			<td><input name="id" type="text" id="id" value="<?php echo $row["id"] ?>"></td>
		</tr>
		<tr>
			<td width="100">Username</td>
			<td><input name="username" type="text" id="username" value="<?php echo $row["username"] ?>"></td>
		</tr>
		<tr>
			<td width="100">Password</td>
			<td><input name="password" type="text" id="password" value="<?php echo $row["password"] ?>"></td>
		</tr>
		<tr>
			<td width="100">First Name</td>
			<td><input name="firs_name" type="text" id="firs_name" value="<?php echo $row["firs_name"] ?>"></td>
		</tr>
		<tr>
			<td width="100">Last Name</td>
			<td><input name="last_name" type="text" id="last_name" value="<?php echo $row["last_name"] ?>"></td>
		</tr>
		<tr>
			<td width="100">Email</td>
			<td><input name="email" type="text" id="email" value="<?php echo $row["email"] ?>"></td>
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