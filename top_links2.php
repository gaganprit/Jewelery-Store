<!-- Top Part Start-->
<html>
<head>
<style type="text/css">

#pointermenu2{
margin: 0;
padding: 0;
}

#pointermenu2 ul{
margin: 0;
margin-left: 15px; /*menu offset from left edge of window*/
float: left;
padding-left: 8px;
font: bold 13px Verdana;
background: #c00000 url(image/leftround2.gif) bottom left no-repeat; /*optional left round corner*/
}

* html #pointermenu2 ul{ /*IE6 only rule. Decrease ul left margin and add 1em bottom margin*/
margin-bottom: 1em;
margin-left: 7px; /*menu offset from left edge of window in IE*/
}

#pointermenu2 ul li{
display: inline;
}


#pointermenu2 ul li a{
float: left;
color: white;
font-weight: bold;
padding: 7px 9px 7px 5px;
text-decoration: none;
}

#pointermenu2 ul li a:visited{
color: white;
}


#pointermenu2 ul li a:hover, #pointermenu2 ul li a#selected{ /*hover and selected link*/
color: yellow;
background: transparent url(image/pointer.gif) bottom center no-repeat;
}

#pointermenu2 ul li a#rightcorner{
padding-right: 0;
padding-left: 2px;
background: url(image/rightround2.gif) bottom right no-repeat; /*optional right round corner*/
}

</style>
</head>
<body>
<div class="top-links">

	<div id="pointermenu2">
	 <ul>
  	<li>	<a href="index">Home</a></li>
  	<li>	<a href="cart">Shopping Cart</a></li>
	<li>	<a href="#" onClick="showSearch();">Search</a></li>
    <li>	<a href="checkout">Checkout</a></li>
    <li>	<a href="viewpurchase" target="_blank">Order History</a></li>
	<li>	<a href="updatepassword">Change Password ?</a></li>
</ul>
</div>
	</div>

</body>
</html>
<!-- Top Part End-->