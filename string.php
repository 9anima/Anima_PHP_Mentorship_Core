<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$string_1 = "This is a string in double quotes";
$string_2 = "This is a somewhat longer, singly quoted string";
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters

echo $string_1."\n";  // i got problem error here because i put .\n to create the new line but browser displayed undefined constant 'm'
echo $string_2;
echo $string_39;
echo $string_0;	
?>
</body>
</html>