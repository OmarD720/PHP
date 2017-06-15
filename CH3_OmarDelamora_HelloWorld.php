<?php
//By Omar De la mora

/*
Chapter 3 PHassignment
Omar De la mora
ITSE 1306
*/

echo '<pre>';

$MyName ='Omar De la mora';

echo '$MyName = ' . $MyName . PHP_EOL;

$Array_xo = array(
    array('X', ' ', 'O'),
    array('O', 'V', 'O'),
    array('A', '&', 'A'));

echo $Array_xo[1][1].PHP_EOL;

$DQuoteVar = "This is in Double quotes!";

echo $DQuoteVar.PHP_EOL;

echo substr($MyName, 2,7).PHP_EOL;

$num1 = 117;
$num2 = 250;

echo $num1.PHP_EOL;
echo $num2.PHP_EOL;

echo $num1 . ' * ' . $num2 . ' = ' . ($num1 * $num2) . PHP_EOL;

echo date("l F jS y", time()).PHP_EOL;


echo '</pre>';
?>