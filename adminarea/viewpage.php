<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>VIEW ABOUT PAGE</title>
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
	<link href="../image/admin.png" rel="icon" />

<style>
table{
    border: 1px solid #9933CC;
}

th {
    background-color: #9933CC;
    color: white;
}
</style>
	
</head>
<body>

<?php

// User is already logged in. Redirect them somewhere useful.
if (!isset($_SESSION['username']))
{
	echo "<script>alert('Web Master Says : : Login First :-( !!!')</script>";
    echo "<meta http-equiv='refresh' content='2;url=../index'>";
	exit();
}

else if(!isset($_SESSION['status']) )
{
	echo "<script>alert('INTRUDER!!!: :')</script>";
    echo "<meta http-equiv='refresh' content='2;url=../index'>";
	exit();
}

else
{
	$admin = $_SESSION['username'];
}

?>

<p align="center"><b>VIEW CATEGORY RECORDS</b></p>

<?php echo 'Hi, <strong>' . $admin . '</strong> Good To See You Working! || <a href="logout"> Logout </a>'; ?>

<br />
<div align="center">
	<?php include("adminmenu.php");?>
</div>

<?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('includes/connect-db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM webcontent ORDER BY content_id ASC") 
                or die(mysql_error());  
                
        // display data in table
        
        echo "<br /><table align='center' border='1' cellpadding='10'>";
		
		echo "<tr> <th>CONTENT ID</th> <th>CONTENT</th> <th>WEBPAGE</th> <th>Edit</th> <th>Delete</th></tr>";
		
		// loop through results of database query, displaying them in the table

        while($row = mysql_fetch_array( $result )) {	
			// echo out the contents of each row into a table
			echo "<tr>";
			echo '<td>' . $row['content_id'] . '</td>';
			echo '<td>' . $row['content'] . '</td>';
			echo '<td>' . $row['webpage'] . '</td>';
			echo '<td><a href="editpage?id=' . $row['content_id'] . '"><img src="../image/edit.png" height="30" width="30"/></a></td>';
			echo '<td><a href="deletepage?id=' . $row['content_id'] . '"><img src="../image/del.png" height="30" width="30"/></a></td>';
			echo "</tr>"; 
		}

        // close table>
        echo "</table>";
?>
</body>
</html>