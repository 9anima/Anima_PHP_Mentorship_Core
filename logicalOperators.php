<?php
/**
 * Created by PhpStorm.
 * User: Self-Made-Spirit
 * Date: 2/27/2016
 * Time: 6:46 PM
 */

$abc=10;
$xyz=0;

if ($abc && $xyz){
    echo "Test 1: Both abc and xyz are true <br/>";
}else{
    echo "Test 1: Either abc or xyz is false <br/>";
}
if ($abc and $xyz){
    echo "Test 2: Both abc and xyz are true <br/>";
}else{
    echo "Test 2: Either abc or xyz is false <br/>";
}
if ($abc || $xyz){
    echo "Test 3: Either abc or xyz is true <br/>";
}else{
    echo "Test 3: both abc or xyz are false <br/>";
}
if ($abc or $xyz){
    echo "Test 4: either abc or xyz is true <br/>";
}else{
    echo "Test 4: both abc andr xyz are false <br/>";
}
$abc=10;
$xyz=30;

if ($abc ){
    echo "Test 6: abc is true <br/>";
}else{
    echo "Test 6:  abc is false <br/>";
}
if ($xyz){
    echo "Test 7: xyz is true </br>";
}else{
    echo "Test 7: xyz is false </br>";
}
if(!$abc){
    echo "Test 8: abc is true </br>";
}else{
    echo "Test 8: abc is false </br>";
}
if(!$xyz){
    echo "Test 5: xyz is true </br>";
}else{
    echo "Test 5: xyz is false </br>";
}