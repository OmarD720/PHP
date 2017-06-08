<?php
/*
Omar De la mora
ITSE 1306
Chapter4 PHP code assignment
*/

echo '<pre>';

echo  'echo-ing name to browser'. PHP_EOL;
$Myname = "Omar De la mora";
echo '$Myname = ' . $Myname . '' . PHP_EOL;

echo "boolean expr 1: [" . (49 > 25) . "]<br>" . PHP_EOL;
echo "boolean expr 2: [" . (10 == 10) . "]<br>" . PHP_EOL;
echo "boolean expr 3: [" . (49 == 50) . "]<br>" . PHP_EOL;
echo "boolean expr 4: [" . (0 == 0) . "]<br>" . PHP_EOL;


echo "Literal expression -True : " . TRUE . "<br>" . PHP_EOL;
echo "Literal expression -False: " . FALSE . "<br>" . PHP_EOL;
echo "Variable: " . $MyName . "<br>" . PHP_EOL;

$a = 500;
$b = 360;
$c = 454;

echo "Arithmetic: " . ($a + $c). "<br>". PHP_EOL;
echo "Assignment: " . ($c = $a + $b) . "<br>" . PHP_EOL;
echo "Comparison: " . ($a > $b) . "<br>" . PHP_EOL;
echo "Increment/Decrement: " . ++$b . " / " . --$a . "<br>" . PHP_EOL;
echo "Logical: " . (($a and $b) == ($a + $b)) . "<br>" . PHP_EOL;
echo "String: " . $a . $b . $c . "<br>" . PHP_EOL;

echo '$a: ' . $a . '<br>$b: ' . $b . '<br>$c: ' . $c . '<br>' . PHP_EOL;

echo PHP_EOL . 'Using relation operators' . PHP_EOL;

if ($a == $b)
{
  echo '$a == $b is TRUE <br>' . PHP_EOL;
}
else
{
  echo '$a == $b is FALSE <br>' . PHP_EOL;
}

if ($b === $c)
{
  echo '$b === $c is TRUE <br>' . PHP_EOL;
}
else
{
  echo '$b === $c is FALSE <br>' . PHP_EOL;
}

if ($a != $b)
{
  echo '$a != $b is TRUE <br>' . PHP_EOL;
}
else
{
  echo '$a != $b is FALSE <br>' . PHP_EOL;
}

//-----------------------------------------------
if ($b !== $c)
{
  echo '$b !== $c is TRUE <br>' . PHP_EOL;
}
else
{
  echo '$b !== $c is FALSE <br>' . PHP_EOL;
}

//-------------------------
if ($a > $b)
{
  echo '$a > $b is TRUE <br>' . PHP_EOL;
}
else
{
  echo '$a > $b is FALSE <br>' . PHP_EOL;
}

//---------------------------
if ($b >= $c)
{
  echo '$b >= $c is TRUE <br>' . PHP_EOL;
}
else
{echo '$b >= $c is FALSE <br>' . PHP_EOL;}

//-------------------------------
if ($a < $b)
{
  echo '$a < $b is TRUE <br>' . PHP_EOL;
}
else
{
  echo '$a < $b is FALSE <br>' . PHP_EOL;
}
//---------------------------------------
if ($b <= $c)
{
  echo '$b <= $c is TRUE <br>' . PHP_EOL;
}
else
{
  echo '$b <= $c is FALSE <br>' . PHP_EOL;
}

echo '/<pre>';
?>
