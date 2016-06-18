<?php
    $con = mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("bbjewels", $con) or die(mysql_error());
     
$name=$_POST['name'];
$message=$_POST['msg'];
$email=$_POST['email'];
$timestamp=date('y-m-d G:i:s');
$header = "From:abc@somedomain.com \r\n";

$retval = mail ($email,$name,$message,$header);

$show="INSERT INTO contact (cid,cemail,cname,cmessage,cdate) VALUES ('','$email','$name','$message','$timestamp')";
$result=mysql_query($show);

if($result)
{
	   if( $retval == true )  
   {
      echo "<script>alert('Message sent successfully...')</script>";
      echo "<script>window.location.href='index'</script>";
   }
   else
   {
      echo "Message could not be sent...";
   }
}
else
{
die('Could not enter data: ' . mysql_error());
exit();
mysql_close();
}
?>