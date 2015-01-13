<?php
include_once 'database_connection_config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>CRUD</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$result = mysql_select_db('crud',$conn);
    if (!$result) 
        {
            die ('No database select: ' . mysql_error());
        }
//var_dump($result);

$res = mysql_query("SELECT id, username, password, firs_name, last_name, email FROM users", $conn);
    if($res === FALSE) 
        {
            die(mysql_error());
        }
	
    $num_rows = mysql_num_rows($res);
//var_dump($num_rows);
?>
<?php
echo "<table>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Username</th>";
			echo "<th>Password</th>";
			echo "<th>First Name</th>";
			echo "<th>Last Name</th>";
			echo "<th>Email</th>";          
        echo "</tr>";

		  while ($row = mysql_fetch_assoc($res)) {
    
        echo "<tr>";
            echo "<td>{$row["id"]}</td>";
            echo "<td>{$row["username"]}</td>";
			echo "<td>xxxxxxx</td>";
            echo "<td>{$row["firs_name"]}</td>";
			echo "<td>{$row["last_name"]}</td>";
			echo "<td>{$row["email"]}</td>";
				
			echo "<td>";   
            echo "<a href='update_users.php?id={$row["id"]}' class='edit'>Edit</a>";
			echo "<a href='delete_users.php?id={$row["id"]}' class='delete'>Delete</a>";
            echo "</td>";
        echo "</tr>";
}
echo "</table>";
?>
    <a href="create_user.php"><input class="button" type="button" value="Create User"></a>
</body>
</html>