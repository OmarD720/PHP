<?php
/*
Omar De la mora
ITSE 1306
Chapter 5 PHP code assignment
*/
include_once('CH5_OmarDelamora_Hellofunctions.php');
$StudentName = 'OmAr De lA MOra';

echo fix_name($StudentName) . "<br>" . PHP_EOL;

$objUser = new PotentialUser("odelamora", "drowssaP", "Omar", "De la mora", "903-555-1212", "odelamora@tstc.edu", "2650 S East End Blvd, Marshall, Tx 75670");
$objEnrolledUser = new EnrolledUser("ITSE 1306", "PHP Programming", "Will Winans", $objUser->username, $objUser->password, $objUser->firstName, $objUser->lastName,  $objUser->phoneNum, $objUser->email, $objUser->phy_address);
echo "<pre>";
print_r($objUser);
print_r($objEnrolledUser);
echo "</pre>";
?>
