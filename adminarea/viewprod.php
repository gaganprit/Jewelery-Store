<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>VIEW PRODUCTS RECORDS</title>
<link href="../image/admin.png" rel="icon" />
	<link rel="stylesheet" type="text/css" href="adminstyle.css">

<style>
table {
    border: 1px solid green;
}

th {
    background-color: green;
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

<p align="center"><b>VIEW PRODUCTS RECORDS</b></p>

<?php echo 'Hi, <strong><font color="red">' . $admin . '</font></strong> Good To See You Working! || <a href="logout"> Logout </a>'; ?>

<br />
<div align="center">
	<?php include("adminmenu.php");?>
</div>

<?php

        // connect to the database
        include('includes/connect-db.php');
		
		$src="../Photos/";

        // get results from database
        $result = mysql_query("SELECT * FROM jewellery ORDER BY id DESC") 
                or die(mysql_error());  
                
        // display data in table
        echo "<p><b>View All</b> | <a href='viewprod-paginated?page=1'>View Paginated</a> | <a href='newprod'>Add a New Product</a></p>";
        
        echo "<table align='center' border='1' cellpadding='10'>";
		
		echo "<tr> <th>ID</th> <th>JEWELLERY NAME</th> <th>IMAGE PAGE</th> <th>CATEGORY</th> <th>PRICE</th> <th>DESCRIPTION</th> <th>TYPE</th> <th>VIEWS</th> <th>IMAGE</th> <th>EDIT</th> <th>DELETE</th></tr>";

		// loop through results of database query, displaying them in the table

        while($row = mysql_fetch_array( $result )) {	
			// echo out the contents of each row into a table
			echo "<tr>";
			echo '<td>' . $row['id'] . '</td>';
			echo '<td>' . $row['prodname'] . '</td>';
			echo '<td>' . $row['path'] . '</td>';
			echo '<td>' . $row['category'] . '</td>';
			echo '<td>' . $row['price'] . '</td>';
			echo '<td>' . $row['descr'] . '</td>';
			echo '<td>' . $row['type'] . '</td>';
			echo '<td>' . $row['noviews'] . '</td>';
			echo '<td><img src="' . $src . $row['path'] . '" width="80px height="80"></td>';
			echo '<td><a href="editprod?id=' . $row['id'] . '"><img src="../image/edit.png" height="30" width="30"/></a></td>';
			echo '<td><a href="deleteprod?paginated=no&id=' . $row['id'] . '"><img src="../image/del.png" height="30" width="30"/></a></td>';
			echo "</tr>"; 
		}

        // close table>
        echo "</table>";
?>
</body>
</html>