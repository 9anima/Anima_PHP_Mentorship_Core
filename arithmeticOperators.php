<?php
/**
 * Created by PhpStorm.
 * User: Self-Made-Spirit
 * Date: 2/27/2016
 * Time: 4:59 PM
 */
//learning airthematic operators in php

$a=20;
$b=10;

$c=$a+$b;
echo "The result of addition of 'a' as $a and 'b' as $b is: 'c' as $c </br>";

$c= $a-$b;
echo "The result of subtraction  of 'a' as $a and 'b' as $b is: 'c' as $c </br>";

$c=$a*$b;
echo "The result of multiplication of 'a' as $a and 'b' as $b is: 'c' as $c </br>";

$c=$a/$b;
echo "The result of division of 'a' as $a and 'b' as $b is: 'c' as $c </br>";

$c=$a%$b;   //% is called modulous operation in arithmetic operators
echo "The result of modulous operation of 'a' as $a and 'b' as $b is: 'c' as $c </br>";

$c=$a++;    //this should give 21 but why is it giving 20 as output?.
echo "The result of the increment operation of 'a' is: $c </br>";

$c=$a--; //this should give 19 but why is it giving 21 as output?.
echo "The result of the decrement operation of 'a' is: $c</br>";

$c=$b--;
echo "The result of the decrement operation of 'b' is: $c</br>";
