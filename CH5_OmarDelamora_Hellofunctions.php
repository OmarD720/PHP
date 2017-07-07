
<?php
/*
Omar De la mora
ITSE 1306
Chapter 5 PHP code assignment
*/
echo '<pre>';
function fix_name($n)
{
	$n = ucwords(strtolower($n));
	return $n;
}
Class PotentialUser
{
	public $username 		= "username";
	public $password 		= "password";
	public $firstName 	= "first Name";
	public $lastName 			= "Last Name";
	public $phoneNum 		= "Phone Number";
	public $email 			= "Email Adress";
	public $phy_address = "phy_address";

//--Constructor method for object
	function __construct($username, $firstName, $lastName , $password, $phoneNum, $email, $phy_address)
	{
		$this -> username = $username;
		$this -> password = $password;
		$this -> firstName 		= $firstName;
		$this -> lastNamename 		= $lastName;
		$this -> phoneNum 	= $phoneNum;
		$this -> email 		= $email;
		$this -> phy_address = $phy_address;
	}

};
class EnrolledUser extends PotentialUser
{
	public $class_name, $class_subject, $instructor_name;
//--Constructor method for the object
	function __construct($class_name, $class_subject, $instructor_name, $username, $firstName, $lastName, $password, $phoneNum, $email, $phy_address)
	{
		$this -> class_name = $class_name;
		$this -> class_subject = $class_subject;
		$this -> instructor_name = $instructor_name;
		parent::__construct($username, $firstName, $lastName, $password, $phoneNum, $email, $phy_address);
	}
};
echo '</pre>';
?>
