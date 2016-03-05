<?php
/**
 * Created by PhpStorm.
 * User: Self-Made-Spirit
 * Date: 2/27/2016
 * Time: 6:14 PM
 */

$abc=30;
$xyz=20;

if($abc==$xyz){
    echo "Test 1: the value of abc is equal to xyz </br>";
}else{
    echo "Test1: the value of abc is not equal ot xyz </br>";
}

if($abc>$xyz){
    echo "Test 2: the value of abc is greater than xyz </br>";
}else{
    echo "Test 2: the value of abc is not greather than xyz </br>";
}

if($abc<$xyz){
    echo "Test 3: the value of abc is less than xyz </br>";
}else{
    echo "Test 3: the value of abc is not less than xyz </br>";
}

if($abc!=$xyz){
    echo "Test 4: the value of abc is not equal to xyz </br>";
}else{
    echo "Test 4: the value of abc is equal to xyz </br>";
}

if($abc>=$xyz){
    echo "Test 5 the value of abc is either greater than or equal to xyz </br>";
}else{
    echo "Test 5: the value of abc is neither greather nor equal to xyz </br>";
}

if($abc<=$xyz){
    echo "Test 6 the value of abc is either less than or equal to xyz </br>";
}else{
    echo "Test 6: the value of abc is neither less than nor equal to xyz </br>";
}