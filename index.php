<?php
$obj= new main ();
$text= "Practice for Web System Development Class";
$text2="This practice will prepare me for the exam";
$text3="HOPEFULLY";
$obj->printthis($text);
$obj->printString($text2);
$obj->stringLenght($text2);
$obj->stringReverse($text2);
$obj->stringUpper($text);
$obj->stringShuffle($text2);
$obj->stringSplit($text3);
$obj->stringReplace($text3);
$obj->stringWordcount($text);
$obj->stringLower($text3);
$obj->stringSlashes($text);
class main {

	public function __construct ()  {

	echo 'Homework for Week 3 </br>';
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
	
	public function stringUpper($text) {
	echo '<h3> Part 1 as Upper Case </h3><br>';
	$upper=strtoupper($text);
	echo 'Upper Case is <br>' .$upper;
	echo '<hr>';
	}
	
	public function stringShuffle($text) {
	echo '<h3> Randoly Shuffle a String </h3> <br>';
	$shuffled= str_shuffle($text);
	echo $shuffled;
	echo '<hr>';
	}
	
	public function stringSplit($text3) {
	echo '<h3> Split text into Array</hr3><br>';
	$arr1 = str_split($text3);
	print_r($arr1);
	echo '<hr>';
	}
	
	public function stringReplace($text3) {
	echo '<h3> Replace Text from Split Array </h3> <br>';
	$replace= substr_replace ($text3, 'I am confident',0);
	echo $replace;
	echo '<hr>';
	}
	
	public function stringWordcount($text) {
	echo '<h3> Count Words within Text </hr><br>';
	print_r(str_word_count($text, 1));
	echo str_word_count($str);
	echo '<hr>';
	}
	
	public function stringLower($text3) {
	echo '<h3> Convert Text to Lower Case </h3><br>';
	$lower= strtolower($text3);
	echo 'This text in lowercase is: <br>' .$lower;
	echo '<hr>';
	}
	
	public function stringSlashes($text) {
	echo '<h3> Add Slashes to Text </h3><br>';
	$slashes = addslashes($text);
	echo $slashes;
	echo '<hr>';
	}

	public function __deconstruct () {
						}

}
?>
