<html>
<head>
	<title> PHP 106 </title>
</head>

<body>
	<h2> Opeartors and Return types + Datatypes Comparison</h2>
<?php
 	//Operations
	$mean = 9;
	$median = 9.5;
	$mode = 10;

	//less than operator
	$result = ($mean < $median);
	print "result is $result";
	echo "<br/>";
	
	//greater than operator
	//if false it prints none
	$result = ($mean > $mode);
	print "result is $result";
	echo "<br/>";

	//Data Type Operations
	$str = "10";
	$int = 10;

	if($str == $int)
		echo "true == <br/>";
	else
		echo "false ==<br/>";

	if($str === $int)
		echo "true ===<br/>";
	else
		echo "false ===<br/>";

	

 ?>
</body>

 </html>