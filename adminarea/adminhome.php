<?php
session_start();

// User is already logged in. Redirect them somewhere useful.
if (!isset($_SESSION['username']))
{
	echo "<script>alert('Web Master Says : : Login First :-( !!!')</script>";//session check area with browser to browser//
    echo "<meta http-equiv='refresh' content='2;url=../index'>";
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

<!DOCTYPE html>
<html>
<head>
<title>Admin Home</title>
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<style>
#clock{
    font-family: 'Open Sans', sans-serif;
    font-size:3em;
    background-color:green;
    color:#fff;
    padding:5px;
    
    top:100px;
    left:100px;
    border:8px solid #666;
    height: 70px;
    width:190px;
}
</style>
<script>
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<link href="../image/admin.png" rel="icon" />
</head>
<body onload="startTime();">

<p align="center"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;WEB MASTER AREA</h2></p>

<?php echo 'Hi, <strong><font color="red">' . $admin . '<p></font></strong> Good To See You Working! || <a href="logout"> Logout </a></p>'; ?>


<div align="center">
<div id="clock">&nbsp;</div><br />
	<?php include("adminmenu.php");?>
</div><br/>
<center>
<img src="../image/adlogo.png">
</center>
</body>
</html>