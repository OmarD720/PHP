<?php

/*
Omar De la mora
ITSE 1306
Chapter 4 PHP code assignment
*/
echo '<pre>';
// assigning and Echoing variable
$StudentName = "Omar De la mora";
echo '$StudentName = ' . $StudentName. PHP_EOL;
// WHILE multiply by 5
$i =  0;
while ($i <= 20)
{
  echo $i * 5 . PHP_EOL;
  $i ++;
}
$i =  0;
// DO WHILE multiply by 10
do
{
  echo $i * 10 . PHP_EOL;
  $i++;
}while ($i <= 20);

// // For loop multiply by 200
for ($i = 0; $i <= 20; $i++) {
    echo $i * 20 . PHP_EOL;
}

echo '</pre>';
?>
