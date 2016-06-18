<?php
session_start();
include("includes/mysqli_connection.php");

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

<?php

if(isset($_SESSION['username']))
{
    $cid = $_GET['cid'];
    
    $sql = ("SELECT cid,cname,cemail FROM contact WHERE cid=$cid");
    $query = mysqli_query($db_conx,$sql);
    
    while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
    {
        $cid = $row['cid'];
        $cname = $row['cname'];
        $cemail = $row['cemail'];
    }
}

else
{
    echo "ERROR!!!";
    $cid = "";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Feedback Form</title>
    
    <link rel="stylesheet" type="text/css" href="../css/css-form.css">

  <link href="../image/admin.png" rel="icon" />
<script type="text/javascript">
/*<!--  Begin
</script>
</head>
<body>

<?php echo 'Hi, <strong><font color="red">' . $admin. '</font></strong> Good To See You Working! || <a href="logout"> Logout </a>'; 
?>
<br />
<div align="center">
    <?php include("adminmenu.php");?>
</div>
    
  <div class="container">
  <div class="login">
    <h1>Customer Feedback</h1>
    <form name ="feedback" method="post" action="sendemail">
      <p><input type="text" name="cid" value="<?php echo $cid;?>"></p>
      <p><input type="text" name="cname" value="<?php echo $cname;?>"></p>
      <p><input type="text" name="cemail"  value="<?php echo $cemail;?>"></p>
      <p><textarea name="cmessage"  value="" ></textarea> </p>
    
      <p class="submit"><input type="submit" name="commit" value="Send Email"></p>
    </form>
  </div>
 </div>

</body>
</html>