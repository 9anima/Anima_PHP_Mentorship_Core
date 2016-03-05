<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//in constract to the variables declared as functional parameters, which are destroyed on the function's exit, a static variable is the variable that doesnot lose its value even if the function exits terminated and will hold that value when the function is called again in any part of the code.
function keep_track(){
	STATIC $count=0; //declaring static variable by putting keyword STATIC infront of the variable name $count.
	$count++;
	print $count;
	print "
	";
	}
	keep_track();
	keep_track();
	keep_track();
	keep_track();
	keep_track();
?>
</body>
</html>