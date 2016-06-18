<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>UNIVERSAL JEWELLERY - REGISTRATION</title>
<link href="image/favicon.png" rel="icon" />
<SCRIPT LANGUAGE="JavaScript">

<!-- Begin
function acceptY()
{
var invalid = " "; // Invalid character is a space
var minLength = 5; // Minimum length
var pw1 = document.forms[0].elements[3].value;
var pw2 = document.forms[0].elements[4].value;

// check for a value in both fields.
if (pw1 == '' || pw2 == '') {
alert('Please enter your password twice.');
return false;
}
// check for minimum length
if (document.forms[0].elements[3].value.length < minLength) {
alert('Your password must be at least ' + minLength + ' characters long. Try again.');
document.forms[0].elements[3].value="";
document.forms[0].elements[4].value="";
document.forms[0].elements[3].focus();
return false;
}
// check for spaces
if (document.forms[0].elements[3].value.indexOf(invalid) > -1) {
alert("Sorry, spaces are not allowed.");
document.forms[0].elements[3].value="";
document.forms[0].elements[4].value="";
document.forms[0].elements[3].focus();
return false;
}
else {
if (document.forms[0].elements[4].value.indexOf(invalid) > -1) {
alert("Sorry, spaces are not allowed.");
document.forms[0].elements[3].value="";
document.forms[0].elements[4].value="";
document.forms[0].elements[3].focus();
return false;
}

else {
if (pw1 != pw2) {
alert ("You did not enter the same password twice. Please re-enter your password.");
//document.forms[0].elements[3].value="";
document.forms[0].elements[4].value="";
document.forms[0].elements[4].focus();
return false;
}
else {
return true;
      }
   }
}
}
//  End -->
</script>


<script type="text/javascript">
<!--  Begin


function resetform()
{
document.forms[0].elements[1]=="";
}

function submitForms()
{
  
if (isName() && isSurname() &&isUsername() && isPassword() && isRpassword() && isEmail() && isAddress() && isTel())
{
  
if(document.formRegister.chk.value=="" || document.formRegister.ran.value!=document.formRegister.chk.value)
{
document.getElementById("error").innerHTML="<font color='red'>Enter Captcha!</font>";
//document.formRegister.chk.focus();
return false;
}
  if (confirm("\n You are about to submit your registration form. \n\nPress Ok to submit. Cancel to abort."))
{
alert(document.forms[0].elements[0].value + " " + document.forms[0].elements[1].value +"\n\n\nYour Registration form has been sent successfully. \n\n\nThank you for joining our us!");
return true;
}
else
{
alert("You have chosen to abort the registration.");
return false;
}
}

else 
return false;
}


function acceptw()
{
if(event.keyCode>45 && event.keyCode<57)
{
event.returnValue=false
window.alert("Sorry ! You can only enter Words.")
}
else
{
if(event.which>45 && event.which<57)
{
event.returnValue=false
window.alert("Sorry ! You can only enter Words.")
}
}
}


function isName()
{
if (document.forms[0].elements[0].value == "")
{
alert ("The Name field is blank. Please enter your Name.")
document.forms[0].elements[0].focus();
return false;
}
return true;
}


function isSurname()
{
if (document.forms[0].elements[1].value == "")
{
alert ("The Surname field is blank. \n\nPlease enter your Surname.")
document.forms[0].elements[1].focus();
return false;
}
return true;
}


function isUsername()
{
if (document.forms[0].elements[2].value == "")
{
alert ("The Username field is blank. \n\nPlease enter your Username.")
document.forms[0].elements[2].focus();
return false;
}
return true;
}


function isPassword()
{
if (document.forms[0].elements[3].value == "")
{
alert ("The Password field is blank. \n\nPlease enter your Password.")
document.forms[0].elements[3].focus();
return false;
}
return true;
}


function isRpassword()
{
if (document.forms[0].elements[4].value == "")
{
alert ("The Re-Enter Password field is blank. \n\nPlease Re-Enter your Password.")
document.forms[0].elements[4].focus();
return false;
}
return true;
}


function isEmail()
{
ml = document.forms[0].elements[5].value;
if(ml == "")
{
alert("Email cannot be blank")
document.forms[0].elements[5].focus();
return false;                
}

else
{
if(ml.length<8)
{
alert("Email length cannot be less than 8 characters");
document.forms[0].elements[5].focus();
return false;  
}

if(ml.indexOf("@")==-1)
{
alert("The Email Address must contain '@' sign");
document.forms[0].elements[5].focus();
return false;  
}

pos1 = ml.indexOf("@")
if(pos1<1)
{
alert("Email address cannot start with '@' sign");
document.forms[0].elements[5].focus();
return false;  
}  

if(ml.indexOf(".")==-1)
{
alert("The Email Address must contain '.' sign");
document.forms[0].elements[5].focus();
return false;  
}

pos = ml.indexOf(" ")
if(pos!=-1)
{
alert("The Email Address cannot contain spaces");
document.forms[0].elements[5].focus();
return false;  
}

pos2 = (pos1+1)
server = ml.substring(pos2);

if(server.indexOf("@")!=-1)
{
alert("A valid Email must contain only one '@' sign");
document.forms[0].elements[5].focus();
return false;  
} 
if(server.indexOf(".")==0)
{
alert("There should some text between '@' and '.' sign");
document.forms[0].elements[5].focus();
return false;  
} 

server_pos = server.lastIndexOf(".")
reqtype = server.substring(server_pos+1)

if(reqtype=="")
{
alert("Email id should end with character(like .com,.net,.org)");
document.forms[0].elements[5].focus();
return false;  
}
 
type_end = reqtype.substring(reqtype.length-1)

if(type_end.toUpperCase()<"A" || type_end.toUpperCase()>"Z")
{
alert("Email id should not end with number or symbol");
document.forms[0].elements[5].focus();
return false;  
}
return true;
}
}


function isAddress()
{
if (document.forms[0].elements[6].value == "")
{
alert ("The Address field is blank. Please enter your address.")
document.forms[0].elements[6].focus();
return false;
}
return true;
}


function isTel()
{
T = document.forms[0].elements[7].value;
if(T == "")
{
alert("Telephone cannot be blank")
document.forms[0].elements[7].focus();
return false;                
}

else
{
if(T.length<10)
{
alert("Telephone Number must contain 10 Numeric Values");
document.forms[0].elements[7].focus();
return false;  
}

return true;
}
}

  

// End -->
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
<?php
//Random Number Generation
$rand=substr(rand(),0,4);//only show 4 numbers
?>
<center>
<br/>
<a href="index"><img src="image/logo.jpg" height="140" width="320"></a>
    <form name="formRegister" method="post" action="ConfirmR" class="login" onSubmit="return submitForms();" "return checkPw(this)">

        <h1>New Customer Registration Panel</h1>
        <br/>
      
      <input type="text" size="25" name="Name" class="login-input" placeholder="Enter Your First Name" onkeypress="acceptw()">
       
       <input type="text" size="25" name="Surname" class="login-input" placeholder="Enter Your Sur Name"onkeypress="acceptw()">
        
       <input type="text" size="20" class="login-input" placeholder="Choose an User Name" name="Username">
             
        <input type="password"  class="login-input" placeholder="Enter a password of length 5" name="pw1" size="20">

        <input type="password" class="login-input" placeholder="Repeat your entered  password" name="pw2" onchange="acceptY()" size="20">
              
        <input type="text" size="30" class="login-input" placeholder="Enter an Email Address" name="Email">

           <input type="textare" cols="30" class="login-input" placeholder="Enter a Billing Address" rows="3" name="Address">
              <input type="text" size="10" class="login-input" placeholder="Enter your Contact No." maxlength="10" name="Tel" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">

        <input type="text" size="15" class="login-input" value="<?=$rand?>" id="ran" readonly="readonly">
        <input type="button" value="Refresh" class="login-submit" onclick="captch()">

<input type="text" name="chk" id="chk" class="login-input" placeholder="Enter captcha">
<span id="error" class="color"></span>  

        <p><input type="submit" value="Make me Registered" class="login-submit">
            <input type="reset" name="reset" class="login-submit" value="Reset All Fields" onClick="return confirm('Are you sure you want to clear the current information?');">
            </p>
         
      </form>
	  <p align="center"><a href="index">Home Page</a></p>
 
</center>
</body>
</html>