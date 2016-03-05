<?php
/**
 * Created by PhpStorm.
 * User: Self-Made-Spirit
 * Date: 3/4/2016
 * Time: 3:05 PM
 */
$aa=42;
$bb=20;
$cc=$aa+$bb; // assignment operator
echo "Addition Operation Result: $cc </<br>";

$cc +=$aa; //cc

$cc += $aa;  /* cc value was 42 + 20 = 62 */
echo "Add AND Assignment Operation Result: $cc <br/>";
$cc -= $aa; /* cc value was 42 + 20 + 42 = 104 */
echo "Subtract AND Assignment Operation Result: $cc <br/>" ;
$cc *= $aa; /* cc value was 104 - 42 = 62 */
echo "Multiply AND Assignment Operation Result: $cc <br/>" ;
$cc /= $aa;  /* cc value was 62 * 42 = 2604 */
echo "Division AND Assignment Operation Result: $cc <br/>" ;
$cc %= $aa; /* cc value was 2604/42 = 62*/
echo "Modulus AND Assignment Operation Result: $cc <br/>";