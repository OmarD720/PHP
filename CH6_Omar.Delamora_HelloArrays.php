<?php
/*
Omar De la mora
ITSE 1306 PHP
Chapter 6 assignment
*/
echo "<pre>";
$MyfavQuote = "I'm good, I'm good, I'm great. -- The Weeknd";
$user = "odelamora";
$user = "Omar De la mora";
$user = "P@ss_W-Or.d";
$user = "903-555-1212";
$user = "odleamora@mymail.tstc.edu";
$user = "2650 S East End Blvd., Marshall, TX  75670";

$class['ClassName'] = "ITSE 1306";
$class['ClassSubject'] = "PHP Programming";
$class['IntructorName'] = "Will Winans";

$grocery_list = array(
  'meats' => array (
          'Hamburger Patties', 'Chicken Wings', 'Chicken Breast', 'Steak'
  ),
  'frozen' => array (
          'Chimichangas', 'Pizza rolls', 'Pizza'
  ),
  'produce' => array (
          'Grapes', 'Kiwee', 'Oranges', 'Strawberries', 'Lettuce'
  ),
  'condiments'=>array(
          'Mayo','Ketchup','Jelly', 'BBQ Sauce', 'Chipotle Mayo'
  ),
  'dairy'=> array (
          'Milk', 'Yogurt', 'Ice-cream', 'Cheese'

  ),
);

  echo "User info For loop <br>" . PHP_EOL;
  for($i = 0; $i < count($user); $i++)
  {
  	echo '$user[' . $i . '] = ' . $user[$i] . '<br>' . PHP_EOL;
  }
  echo "User info For loop <br>" . PHP_EOL;
  $j = 0;
  foreach($class as $item)
  {
  	echo '$class[' . $j . '] = ' . $item . '<br>' . PHP_EOL;
  	$j++;
  }

  echo "Nested foreach loop to display the grocery_list array<br>" . PHP_EOL;
  foreach($grocery_list as $label => $department)
  {
  	echo '$department = ' . $label . '<br>' . PHP_EOL;
  	$j++;
  	foreach($department as $item)
  	{
  		echo '$item = ' . $item . '<br>' . PHP_EOL;
  	}
  }
  sort($grocery_list, SORT_REGULAR);

  echo "Nested foreach loop to display the grocery_list array after it has been sorted" . PHP_EOL;
  foreach($grocery_list as $label => $department)
  {
  	echo '$department = ' . $label . '<br>' . PHP_EOL;
  	foreach($department as $item)
  	{
  		echo '$item = ' . $item . '<br>' . PHP_EOL;
  	}
  }
  $MyfavQuote = explode('--', $MyfavQuote);

  print_r($MyfavQuote);
  echo "</pre>";

 ?>
