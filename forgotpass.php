<html lang="en">
    <head>
        <title>Forgot your pasword?</title>
        <link href="image/favicon.png" rel="icon" />
       
        <link rel="stylesheet" type="text/css" href="css/style_new.css" />
		
		<style>
			
			body {
				background: #563c55 url(image/blurred.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
	
	<script type="text/javascript">

	function validateForm() 
	{
   		 var x = document.forms["form-3"]["email"].value;
    	 var atpos = x.indexOf("@");
         var dotpos = x.lastIndexOf(".");
         if(x ==" ")
		{
	    	alert("Type an email address first");
        	return false;
    	}

    	if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) 
    	{
        	alert("Not a valid e-mail address");
        	return false;
    	}
    	else
    	{
    		return true;
    	}
	}
		</script>

    </head>
    <body>
        <div class="container">
			<!-- Codrops top bar -->
		<br/><br/><br/><h1> <center><font color="white">FORGOT YOUR PASSWORD ?</font></center></h1><p></p>
		<p>
		<center><font color="yellow"><b>Enter your Email Id,we will send you password to your registered Email address</b></font></center></p>
<p><center> <img src="image/forgot.png"></center></p>
		<section class="main">
				<form name="form-3" class="form-3" action="processforgot" method="post" onsubmit="return validateForm()">
				    <p class="clearfix">
				        <label for="login">Your Email Id</label>			        
				        <input type="text" name="email" id="login" placeholder="Enter Your Email Id">
				    </p>

				    <p class="clearfix">
				        <input type="submit" name="submit" value="Sent Password">
				    </p>       
				</form>​
			</section>
			
        </div>
    </body>
</html>