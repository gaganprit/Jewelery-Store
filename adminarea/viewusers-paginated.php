<?php
session_start();
include("includes/admin_config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>VIEW USER RECORDS - PAGINATED</title>
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
    <link href="../image/admin.png" rel="icon" />
    <style>
table{
    border: 1px solid #CC0000;
}

th {
    background-color: #CC0000;
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

<p align="center"><b>VIEW USER RECORDS - PAGINATED</b></p>

<?php echo 'Hi, <strong>' . $admin . '</strong> Good To See You Working! || <a href="logout"> Logout </a>'; ?>

<br />
<div align="center">
	<?php include("adminmenu.php");?>
</div>

<?php
/* 
        VIEW-PAGINATED.PHP
        Displays all data from 'players' table
        This is a modified version of view.php that includes pagination
*/

        // connect to the database
        include('includes/connect-db.php');
        
        // number of results to show per page
        $per_page = 5;
        
        // figure out the total pages in the database
        $result = mysql_query("SELECT * FROM users");
        $total_results = mysql_num_rows($result);
        $total_pages = ceil($total_results / $per_page);

        // check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
        if (isset($_GET['page']) && is_numeric($_GET['page']))
        {
                $show_page = $_GET['page'];
                
                // make sure the $show_page value is valid
                if ($show_page > 0 && $show_page <= $total_pages)
                {
                        $start = ($show_page -1) * $per_page;
                        $end = $start + $per_page; 
                }
                else
                {
                        // error - show first set of results
                        $start = 0;
                        $end = $per_page; 
                }               
        }
        else
        {
                // if page isn't set, show first set of results
                $start = 0;
                $end = $per_page; 
        }
        
        // display pagination
        
        echo "<p><a href='viewusers'>View All</a> | <b>View Page:</b> ";
        for ($i = 1; $i <= $total_pages; $i++)
        {
                echo "<a href='viewusers-paginated?page=$i'>$i</a> ";
        }
        echo " | <a href='newuser'>Add a new record</a></p>";
                
        // display data in table
        echo "<table align='center' border='1' cellpadding='10'>";
        echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Username</th><th>Email</th> <th>Address</th> <th>Tel</th> <th>Acc Type</th> <th>Status</th> <th>Edit</th> <th>Delete</th></tr>";

        // loop through results of database query, displaying them in the table 
        for ($i = $start; $i < $end; $i++)
        {
                // make sure that PHP doesn't try to show results that don't exist
                if ($i == $total_results) { break; }
        
                // echo out the contents of each row into a table
				echo "<tr>";
				echo '<td>' . mysql_result($result, $i, 'user_id') . '</td>';
				echo '<td>' . mysql_result($result, $i, 'name') . '</td>';
				echo '<td>' . mysql_result($result, $i, 'surname') . '</td>';
				echo '<td>' . mysql_result($result, $i, 'username') . '</td>';
				//echo '<td>' . mysql_result($result, $i, 'password') . '</td>';
				echo '<td>' . mysql_result($result, $i, 'email') . '</td>';
				echo '<td>' . mysql_result($result, $i, 'address') . '</td>';
				echo '<td>' . mysql_result($result, $i, 'tel') . '</td>';
				echo '<td>' . mysql_result($result, $i, 'ac_type') . '</td>';
				echo '<td>' . mysql_result($result, $i, 'user_status') . '</td>';
				echo '<td><a href="edituser?id=' . mysql_result($result, $i, 'user_id') . '"><img src="../image/edit.png" height="30" width="30"/></a></td>';
				echo '<td><a href="deleteuser?paginated=yes&id=' . mysql_result($result, $i, 'user_id') . '"><img src="../image/del.png" height="30" width="50"/></a></td>';
				echo "</tr>";
        }
        // close table>
        echo "</table>"; 
        
        // pagination
        
?>
</body>
</html>