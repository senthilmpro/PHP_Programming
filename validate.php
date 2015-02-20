<html>
<head>
	<title> Validate PHP </title>
</head>

<body>
<?php
 	$username = $_POST["username"];
 	$email = $_POST["email"];

 	if((!empty($username)) && (!empty($email)))
 	{
 		$isValidEmail = validateEmail($email);
 		if(!empty($isValidEmail))
 		{
 			setcookie("user",$username, time()+3600);
 			setcookie("email",$email, time()+3600);
 			session_start();
 			$_SESSION['session_user'] = $username;
 			$_SESSION['session_email'] = $email;
 			//session_write_close();
 			echo "Click here to continue <a href='./welcome.php'>Welcome </a>";
 		}
 		else
 			echo "Invalid Email. Return to <a href='./login.html'>Login </a>";
 	}
 	else
 	{
 		echo "Please fill all fields";
 	}

 	function validateEmail($email){ 
    	return filter_var($email, FILTER_VALIDATE_EMAIL);
	}
 ?>
</body>

 </html>