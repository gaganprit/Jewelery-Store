<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>VIEW CATEGORY RECORDS</title>
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
	<link href="../image/admin.png" rel="icon" />
<style>
table{
    border: 1px solid #996600;
}

th {
    background-color: #996600;
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

<?php echo 'Hi, <strong><font color="red">' . $admin . '</font></strong> Good To See You Working! || <a href="logout"> Logout </a>'; ?>

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
        $result = mysql_query("SELECT * FROM main_menu ORDER BY mmenu_id ASC") 
                or die(mysql_error());  
                
        // display data in table
        echo "<p><b>View All</b> | <a href='viewcategories-paginated?page=1'>View Paginated</a> | <a href='newcategory'>Enter New Category</a></p>";
        
        echo "<table align='center' border='1' cellpadding='10'>";
		
		echo "<tr> <th>MENU ID</th> <th>MENU NAME</th> <th>MENU LINK</th> <th>Edit</th> <th>Delete</th></tr>";
		
		// loop through results of database query, displaying them in the table

        while($row = mysql_fetch_array( $result )) {	
			// echo out the contents of each row into a table
			echo "<tr>";
			echo '<td>' . $row['mmenu_id'] . '</td>';
			echo '<td>' . $row['mmenu_name'] . '</td>';
			echo '<td>' . $row['mmenu_link'] . '</td>';
			echo '<td><a href="editcategory?id=' . $row['mmenu_id'] . '"><img src="../image/edit.png" height="30" width="30"/></a></td>';
			echo '<td><a href="deletecategory?paginated=no&id=' . $row['mmenu_id'] . '"><img src="../image/del.png" height="30" width="30"/></a></td>';
			echo "</tr>"; 
		}

        // close table>
        echo "</table>";
?>
</body>
</html>