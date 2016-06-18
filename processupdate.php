<?php
session_start();

// User is already logged in. Redirect them somewhere useful.
if (!isset($_SESSION['username']))
{
	echo "<script>alert('Login First :-( !!!')</script>";//session check area with browser to browser//
		echo "<br />Redirecting to Home Page...";
				echo "<script>alert('Login on Main Page!')</script>";	
				echo "<script>window.location.href='index'</script>";
        	}

else
{
	$admin = $_SESSION['username'];
}

?>


<?php
include ("includes/mysqli_connection.php");

$email= mysqli_real_escape_string($db_conx,$_POST['email']);
$opass= mysqli_real_escape_string($db_conx,$_POST['opass']);
$npass= mysqli_real_escape_string($db_conx,$_POST['npass']);

	$sql = "SELECT COUNT(*) FROM users WHERE email LIKE '$email'";

$query = mysqli_query($db_conx, $sql);

if ($query==false) die(mysql_error());

else
{
	$row = mysqli_fetch_row($query);

	$rows = $row[0];

	if($rows == 1)
	{
		$selectsql= "select AES_DECRYPT(password,'key') from users where email='$email'";
		$qql = mysqli_query($db_conx,$selectsql);
		$row = mysqli_fetch_array($qql);
	
		$password = $row[0];

		if($password==$opass)
		{
			$newsql = mysqli_query($db_conx,"update users set password = AES_ENCRYPT('$npass','key') where email = '$email' and password = AES_ENCRYPT('$opass','key')");
			 if($newsql == true)
			 {	
				echo "<script>alert('Password change Successfully!')</script>";
				echo "<br />Redirecting to Home Page...";
				//echo "<script>alert('Login on Main Page!')</script>";	
				echo "<script>window.location.href='index'</script>";
			}
			else
			{
				echo "<script>alert('Password unchanged!')</script>";
				echo "<br />Redirecting to Home Page...";
				//echo "<script>alert('Login on Main Page!')</script>";	
				echo "<script>window.location.href='index'</script>";
			}
		}
		else
		{
			    echo "<script>alert('Old Password is not correct!')</script>";
				echo "<br />Redirecting to Home Page...";
				//echo "<script>alert('Login on Main Page!')</script>";	
				echo "<script>window.location.href='index'</script>";
		}
	}
	else
	{
				echo "<script>alert('Not a valid Email Id!')</script>";
				echo "<br />Redirecting to Home Page...";
				//echo "<script>alert('Login on Main Page!')</script>";	
				echo "<script>window.location.href='index'</script>";
	}

}

?>