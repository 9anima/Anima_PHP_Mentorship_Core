<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//as indicated by the name this function returns the value of the name. it is the namr/identifier for a simple value. its value can not be changed during the execution of the script. its case sensitive by default and are are always uppercase. A  constant  name  starts  with  a  letter  or underscore,  followed  by  any  number  of  letters,  numbers,  or  underscores.  If  you  have defined a constant, it can never be changed or undefined.

// To  define  a  constant  you  have  to  use  define()  function  and  to  retrieve  the  value  of  a constant, you have to simply specifying its name. Unlike with variables, you do not need to have a constant with a $. You can also use the function constant() to read a constant's value if you wish to obtain the constant's name dynamically.

define ("MINSIZE", 50);
echo MINSIZE;
echo constant("MINSIZE");	// same thing as the previous line

?>
</body>
</html>