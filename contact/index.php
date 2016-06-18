<html>
<head>
<title>Contact Us</title>
<link href="../image/cmail.png" rel="icon" />
<link rel="stylesheet" href="../css/contact.css">
<script type="text/javascript">
 
//Javascript Captcha validation
 
function validation()
{
 
if(document.form1.name.value=="")
{
document.getElementById("name").innerHTML="Enter your Name!";
document.form1.name.focus();
return false;
}

var x = document.forms["form1"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }


    if(document.form1.msg.value=="")
{
document.getElementById("error1").innerHTML="Enter Some Mesasge!";
document.form1.msg.focus();
return false;
}
 
if(document.form1.chk.value=="")
{
document.getElementById("error").innerHTML="Enter Captcha!";
document.form1.chk.focus();
return false;
}
 
 
if(document.form1.ran.value!=document.form1.chk.value)
{
document.getElementById("error").innerHTML="Captcha Not Matched!";
document.form1.chk.focus();
return false;
}
return true;
}
</script>

<script type="text/javascript">
 
//Javascript Referesh Random String
 
function captch() {
    var x = document.getElementById("ran")
    x.value = Math.floor((Math.random() * 10000) + 1);
}
</script>

</head>
<body>
<br/>
<center><img src="../image/logo.jpg"/></center>
</br>
<form method="post" class ="contact" action="../sendmail.php" name="form1" onsubmit="return validation()">
<center><img src="../image/Capture.png" height="250" width="390" />

</center>

<?php
//Random Number Generation
$rand=substr(rand(),0,4);//only show 4 numbers
?>
<fieldset class="contact-inner">

      <p class="contact-input">
  <input type="text" name="name" placeholder="Your Name" autofocus>
  <span id="name" class="color"></span>

      </p>
<p class="contact-input">
  <input type="text" name="email" placeholder="Your Email Id" autofocus>
  <span id="email" class="color"></span>

      </p>

<p class="contact-input">
        <textarea name="msg" placeholder="Your Message"></textarea>
        <span id="error1" class="color"></span>
      </p>

<p class="contact-input">
<input type="text" value="<?=$rand?>" id="ran" readonly="readonly" class="captcha">
 </p>
 <p class="contact-submit">
<input type="button" value="Referesh" onclick="captch()" />
</p>
<br/>
<p class="contact-input">
<input type="text" name="chk" id="chk" placeholder="Enter Captcha">
<span id="error" class="color"></span>

</p>
<br/>
  <p class="contact-submit">
        <input type="submit" name="check" value="Send Message" onclick="return validation();">
      </p>
</fieldset>
</form>

<?php
if(isset($_POST['check']))
{
echo "Form Submitted<br>";
 
echo "Name:".' '.$name=$_POST['name'];
}
?>

</body>
</html>