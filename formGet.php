<html>
<head>
	<title> formGet Message </title>
</head>

<body>
<?php
 	
	$country = $_GET['country'];
	if($country == "INDIA")
		$msg = "Namaste";
	else if($country == "USA")
		$msg = "Hello";
	else if($country == "SPAIN")
		$msg = "Hola";
	echo $msg;
 ?>
</body>

 </html>