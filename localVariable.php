<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Local Variables</title>
</head>

<body>
<?php
$x=5; 		//variable declared outside of the function is global variable.
function assignx(){
	$x= 2; 		// variable defined inside a function i.e. $x inside function assignx() is local variable.
	print "\$x inside function is $x.";
	}
	assignx(); 
	 print "\$x outside function is $x.";
?>
</body>
</html>