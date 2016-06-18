
<?php
session_start();

// User is already logged in. Redirect them somewhere useful.
if (!isset($_SESSION['username']))
{
  echo "<script>alert('Web Master Says : : Login First :-( !!!')</script>";//session check area with browser to browser//
echo "<br />Redirecting to Home Page...";
        echo "<script>alert('Login on Main Page!')</script>"; 
        echo "<script>window.location.href='index'</script>";
          }

else
{
  $admin = $_SESSION['username'];
}

?>

<html><head><title>Change Password</title>


<link href="image/favicon.png" rel="icon" />
  <style type="text/css">


* { box-sizing: border-box; padding:0; margin: 0; }

body {
  font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
  color:white;
  font-size:12px;

}

form {
  background:#111;
  filter: alpha(opacity=50);
  opacity: 0.71; 
  width:300px;
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}

form:after {
  content:"";
  display:block;
  position:absolute;
  height:1px;
  width:100px;
  left:20%;
  background:linear-gradient(left, #111, #444, #b6b6b8, #444, #111);
  top:0;
}

form:before {
  content:"";
  display:block;
  position:absolute;
  width:8px;
  height:5px;
  border-radius:50%;
  left:34%;
  top:-7px;
  box-shadow: 0 0 6px 4px #fff;
}

.inset {
  padding:20px; 
  border-top:1px solid #19191a;
}

form h1 {
  font-size:18px;
  text-shadow:0 1px 0 black;
  text-align:center;
  padding:15px 0;
  border-bottom:1px solid rgba(0,0,0,1);
  position:relative;
}

form h1:after {
  content:"";
  display:block;
  width:250px;
  height:100px;
  position:absolute;
  top:0;
  left:50px;
  pointer-events:none;
  transform:rotate(70deg);
  background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
  
}

label {
  color:yellow;
  display:block;
  padding-bottom:9px;
}

input[type=text],
input[type=password] {
  width:100%;
  padding:8px 5px;
  background:linear-gradient(white);
  border:1px solid #222;
  box-shadow:
    0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
}

.p-container {
  padding:0 20px 20px 20px; 
}

.p-container:after {
  clear:both;
  display:table;
  content:"";
}

.p-container span {
  display:block;
  float:left;
  color:#0d93ff;
  padding-top:8px;
}

input[type=submit] {
  padding:5px 20px;
  border:1px solid rgba(0,0,0,0.4);
  text-shadow:0 -1px 0 rgba(0,0,0,0.4);
  box-shadow:
  inset 0 1px 0 rgba(255,255,255,0.3),
  inset 0 10px 10px rgba(255,255,255,0.1);
  border-radius:0.3em;
  background:#0184ff;
  color:white;
  float:right;
  font-weight:bold;
  cursor:pointer;
  font-size:13px;
}

input[type=submit]:hover {
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 -10px 10px rgba(255,255,255,0.1);
}

input[type=text]:hover,
input[type=password]:hover,
label:hover ~ input[type=text],
label:hover ~ input[type=password] {
  
}

</style>

<script type="text/javascript">  
function validateForm() 
{
    var x = document.forms["update"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) 
    {
        alert("Not a valid e-mail address");
        return false;
    }
    if(update.opass.value=="" & update.npass.value=="" || update.rpass.value=="")
    {
      alert("Give your password motherfucker!");
      update.opass.focus();
      return false;
    }
    

    if(update.opass.value==update.npass.value)
    {
      alert("Old password can't be same as new one!");
      update.npass.focus();
      return false;
    }

    if(update.npass.value.length<5)
    {
      alert("Password must be 5 character length!");
      update.npass.focus();
      return false;
    } 
    if(update.npass.value!=update.rpass.value)     
    {
      alert("Password doesn't match!");
      update.rpass.focus();
      return false;
    }
    else
    {
      return true;
    }
    
}
</script>

</head>
<body background="image/bg2.jpg">
<form name="update" action="processupdate" method="post" onsubmit="return validateForm();">
  <h1>Change Your Password</h1>
  <div class="inset">
  <p>
    <label for="email"><b>ENTER EMAIL ADDRESS</b></label>
    <input type="text" name="email" id="email" placeholder="Enter your email id">
  </p>
  <p>
    <label for="password"><b>ENTER RECENT PASSWORD</b></label>
    <input type="password" name="opass" id="password" placeholder="Enter recent password">
  </p>
  <p>
    <label for="password"><b>ENTER NEW PASSWORD</b></label>
    <input type="password" name="npass" id="password" placeholder="Enter new password">
  </p>
  <p>
    <label for="password"><b>RE-ENTER NEW PASSWORD</b></label>
    <input type="password" name="rpass" id="password" placeholder="Enter repeat password">
  </p>
  </div>
  <p class="p-container">
  
    <input type="submit" name="go" id="go" value="Update Password">
  </p>
   <p class="p-container">
  <a href="index"><font color="cyan">GO HOME</font></a>
  </p>
</form>
</body>