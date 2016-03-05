<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//multiply a value by 10 and return it to the caller
 function multiply ($value){
	 $value=$value*10;
	 return $value;
	 }
	 $retVal= multiply(10);
	 print "The Return Value is $retVal/n";
?>

<?php
// add a value by same value and return to the caller
function add($addingValue){
$addingValue=$addingValue+10;
return $addingValue;
}
$retVal= add(10);
print "The return value is $retVal/n ";
?>

<?php
//subtract a value by 10 and return it to the caller
 function sub($subVal){
	 $subVal=$subVal-10;
	 return $subVal;
	 }
	 $retVal= sub(4);
	 print "The Return Value is $retVal/n";
?>

<?php
//divide a value by 10 and return it to the caller
 function div($divVal){
	 $divVal=$divVal/10;
	 return $divVal;
	 }
	 $retVal= div(20);
	 print "The Return Value is $retVal/n";
?>
</body>
</html>