<html>
<head>
	<title> PHP 101 </title>
</head>

<body>
<?php
 
	$age = $_POST["age"];
	if($age < 18)
		echo "Get out of my Club child";
	else if ($age > 18 and $age < 29)
		echo "Welcome to the party";
	else
		echo "Get out old man";
 ?>
</body>

 </html>