<?php
$obj= new main ();
$text= "Pretty women wonder where my secret lies.</br>
I'm not cute or built to suit a fashion model's size </br>
But when I start to tell them,</br>
They think I'm telling lies.</br>";
$text2="I say it's in the reach of my arms";
$obj->printthis($text);
$obj->printString($text2);
$obj->stringLenght($text2);
$obj->stringReverse($text2);
class main {

	public function __construct ()  {

	echo 'Phenomenal Woman by Maya Angelou </br>';
					 }
	public function printthis ($text) {
	echo'<h3> Part 1 </h3>';
	print ($text);
	echo '<hr>';
	}
	
	public function printString($text2) {
	echo '<h3> Part 2 </h3>';
	print ($text2);
	echo '<hr>';
	}
	
	public function stringLenght($text2) {
	echo '<h3><u>Lenght of Part 2</u></h3><br>';
	$lenght=strlen($text2);
	echo 'The lenght of the string is:'.$lenght;
	echo '<hr>';
	}
	
	public function stringReverse($text2) {
	echo '<h3> Reversing Part 2 </h3><br>';
	$reverse=strrev($text2);
	echo 'Reversed Part 2 is: <br> ' .$reverse;
	echo '<hr>';
	}

	public function __deconstruct () {
						}

}
?>
