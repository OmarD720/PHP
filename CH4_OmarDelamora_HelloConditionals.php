<?php
/*
Omar De la mora
ITSE 1306

Chapter 4 PHP code assignment
*/
//-------Assinging and echoing a variable
echo '<pre>';

$name = 'Omar De la mora';
echo $name . PHP_EOL;

//Date function and comparing returned value against a string
$day = date("D");
if ($day == "Fri")
{
  echo "Today is Friday.<br>" . PHP_EOL;
}
elseif ($day == "Sat")
{
   echo "Today is Saturday.<br>" . PHP_EOL;
}

else
{
  echo "Today is not Friday nor Saturday.<br>" . PHP_EOL;
}

//Rock, Paper, Scissors

$game = "Scissors";
echo $game . PHP_EOL;
switch ($game) {
	case "Rock":
		echo "Rock beats crushes scissors <br>" . PHP_EOL;
		break;
	case "Paper":
		echo "Scissors cuts Paper." . PHP_EOL;
		break;
	case "Scissors":
		echo "it's a Draw <br>" . PHP_EOL;
		break;
	default:
		echo "ERROR 404" . PHP_EOL;
		break;
};
echo '</pre>';
 ?>
