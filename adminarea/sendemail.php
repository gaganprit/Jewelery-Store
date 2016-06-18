<?php

   $cmessage = $_POST['cmessage']; 
   $cemail = $_POST['cemail'];
   $timestamp=date('y-m-d G:i:s');
   $cname = $_POST['cname'];
   $subject = "Thank you for writting us ".$cname;
   $message = "Dont reply to this email,it's automated reply form.We are looking for your problem :" .$cmessage."to solve";
   $header = "Reply From Universal Jewellery\r\nbgiproject2015@gmail.com";

   $retval = mail ($cemail,$subject,$message,$header);
   if( $retval == true ) 
   {
    echo "<script>alert('You have send email successfully!')</script>";
    echo "<script>window.location.href='viewcontact'</script>";
    }
    else
    {
    echo "<script>alert('You couldn't send email!')</script>";
    echo "<script>window.location.href='adminhome'</script>";
  }

?>

