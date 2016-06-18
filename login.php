<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>BB Jewellery :: Login Screen</title>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script>
$('#btnClose').click(function(e) {
    $('#loginDiv').hide(0);
});

</script>
<style type="text/css">
.mylogin {
    background-color:#44c767;
    -moz-border-radius:28px;
    -webkit-border-radius:28px;
    border-radius:28px;
    border:1px solid #18ab29;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:arial;
    font-size:17px;
 
    text-decoration:none;
    text-shadow:0px 1px 0px #2f6627;
}
.mylogin:hover {
    background-color:#5cbf2a;
}
.mylogin:active {
    position:relative;
    top:1px;
}


</style>

</head>

<body>

<form id="ajaxform" method="post" action="processlogin">
<div id="login_center_main" style="text-align:center">
	<div id="closeLogin" style="text-align:right;">
    <a href="#">
    	<img src="image/close.jpg" width="10%" height="12%" id="btnClose" /></a>
	</div>
	<div id="inputDivLogin">
   
    	<div id="LoginLabel"><b><font color="#66CCFF">Username</font></b></div>
        <div id="LoginInput"><input type="text" placeholder="Enter Username" name="txtusername" class="Logintextboxes"/></div>
        
    </div>
	<br />
    <div id="inputDivLogin">
    	<div id="LoginLabel"><b><font color="#66CCFF">Password</font></b></div>
		<div id="LoginInput"><input type="password" placeholder="Enter Password" name="txtpassword" class="Logintextboxes"/></div>
    <br/>
    <a href="forgotpass"><b>Forgot password?</b></a>
    </div>
	<br />
    	<div>
        	<input id="btnSignin" class="mylogin" type="submit" value="Sign in" />
  
	</div>
</div>
</form>

</body>
</html>