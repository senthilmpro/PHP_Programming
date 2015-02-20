<html>
<head>
	<title> Validate PHP </title>
</head>

<body>
<?php
	session_start();
	echo "<h3>COOKIES</h3>";
	echo "<br/>";
	
	echo "<br/>";
 	if(isset($_COOKIE["user"]))
 	{
 		echo "Welcome, <i>".$_COOKIE["user"]."</i>";
 		echo "<br/>";
 	}
 	if(isset($_COOKIE["email"])){
 		echo "Your Email Id(using Cookies) is <b>".$_COOKIE["email"]."</b>";
 		echo "<br/>";
 	}
	echo "--------------";
	echo "<br/>";
	echo "<h3>SESSIONS</h3>";
	echo "<br/>";
	
	echo "<br/>";
 	if(isset($_SESSION["session_user"])){
 		echo "Welcome,  <i>".$_SESSION["session_user"]."</i>";
 		echo "<br/>";
 	}
 	if(isset($_SESSION["session_email"])){
 		echo "Your Email Id(using Session) is <b>".$_SESSION["session_email"]."</b>";
 		echo "<br/>";
 	}

 ?>
</body>

 </html>