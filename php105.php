<html>
<head>
	<title> PHP 105 </title>
</head>

<body>
	<h2> Form Operations </h2>
<?php
 //Form + Calling Operaters

	//Retrieving FORM data
	$input = $_POST['msg'];

	//use it
	echo "You said it : ". $input;
	
 ?>
</body>

 </html>