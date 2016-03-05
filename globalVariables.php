<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Global Variables</title>
</head>

<body>
<?php
$someVar=3;
function addit(){
	GLOBAL $someVar;
	$someVar++;
	print "some var is $someVar";
	}
	addit();
	// it gave same answer as 4 when i used this function here : addit($someVar--);
?>
<?php
// in this code, when i remove the keyword GLOBAL from inside the function subit(), and do not declare the value for the variable, $someVar, the output will give a blank space in the $someVar place. but if i am to put a variable value for $someVar variable inside the subit() function suppose $someVar=7, the output will be 6. its so because the function subit() gives output to the variables that is declared inside it and the variable declared outside is global variable so in order for us to use the same global variable that we declared outside the funciton to be used inside the function we have to type the keyworkd GLOBAL.
$someVar=3;
function subit(){
	GLOBAL $someVar; //declaring php to use the global variable $someVar inside the function by specifying using GLOBAL $someVar
	$someVar--;
	print "some var is $someVar";
	}
	subit();
	// it gave same answer as 4 when i used this function here : addit($someVar--);
	// how can this similar code and function be used to get the multiplication output? question to da
?>
<?php
// this code dose work if we are to declare another function. since the function addit() is already declared we can not redeclare it and reuse it like this. i need to ask achyut da on how to use the same function in other part of the same class path code.
$someVar=3; //global variable
function addit(){
	$someVar=7; //without using the global variable and declaring the same variable as global variable inside function, php 								outputs the variable declared inside the function rather than the variable declared outside of the function.
	$someVar++;
	print "some var is $someVar";
	}
	addit();
	// it gave same answer as 4 when i used this function here : addit($someVar--);
?>

</body>
</html>