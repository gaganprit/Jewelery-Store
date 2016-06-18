<?php
include ("includes/mysqli_connection.php");

$email= mysqli_real_escape_string($db_conx,$_POST['email']);

	$sql = "SELECT COUNT(*) FROM users WHERE email LIKE '$email'";

$query = mysqli_query($db_conx, $sql);

if ($query==false) die(mysql_error());

else
{
	$row = mysqli_fetch_row($query);

	$rows = $row[0];

	if($rows == 1)
	{
		$selectsql= "select name,surname,AES_DECRYPT(password,'key'),username from users where email='$email'";
		$qql = mysqli_query($db_conx,$selectsql);
		$row = mysqli_fetch_array($qql);
	
		$name = $row[0];
		$surname = $row[1];
		$password = $row[2];
		$username = $row[3];
		
		$subject = "Forgot Password Notification\n Hello ".$name."".$surname." !";
		$message = "Dont reply to this email,it's automated reply form: Your Username: ".$username."\nYour password is: " .$password.
		" \n you can login with your same username & password";
 		$header = "Reply From Universal Jewellery\r\nbgiproject2015@gmail.com";

 		$retval = mail ($email,$subject,$message,$header); 

 		if($retval == true)
 		{
 				echo "<script>alert('Password send Successfully!')</script>";
				echo "<br />Redirecting to Home Page...";
				echo "<script>alert('Login on Main Page!')</script>";	
				echo "<script>window.location.href='index'</script>";
 		}

 		else
 		{
 		        echo "<script>alert('Password couldn't send Successfully!')</script>";
				echo "<br />Redirecting to Home Page...";
				echo "<script>alert('Login on Main Page!')</script>";	
				echo "<script>window.location.href='index'</script>";

 		}
 	
 	}

 else
 {
 				echo "<script>alert('Email Id Not found!')</script>";
				echo "<br />Redirecting to Home Page...";
				echo "<script>alert('Login on Main Page!')</script>";	
				echo "<script>window.location.href='index'</script>";
 }
}

?>