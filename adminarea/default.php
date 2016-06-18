<?php
session_start();

if(!isset($_SESSION['status']) )
{
	echo "<script>alert('INTRUDER!!!: :')</script>";
    echo "<meta http-equiv='refresh' content='2;url=../index'>";
	exit();
}

else
{
	echo "<script>window.location.href='adminhome';</script>";
}
?>