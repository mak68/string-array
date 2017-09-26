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

$numbers = array(1,2,3,4,5,6);
$numbers2= array (7,8,9,10,11);
//$numbers3= array("8" , "7" , "6" , "5");

$fruits= array("apple","orange","banana","kiwi","pear");
$replacefruits= array(0=>" pinaple", 3 => "cherry");
$colors=array(0=>'red', 1=> 'white', 2=>'blue', 3=>'purple');


$obj->printArray($numbers);
$obj->arrayReplace ($fruits,$replacefruits);
$obj->arrayMerge ($numbers, $numbers2);
$obj->arrayPush ($fruits);
$obj->arrayKeys ($colors);
$obj->arraySlice($fruits);
$obj->arraySum($numbers);
$obj->arrayResort($colors);
$obj->arrayReverse($fruits);
$obj->arrayShuffle($numbers);


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
	
	public function printArray($numbers) {
	echo '<h3> Print the Numbers Array </h3><br>';
	print_r($numbers);
	echo '<hr>';
	}
	
	public function arrayReplace ($fruits,$replacefruits) {
	echo '<h3> Replace Arrays </h3><br>';
	$output= array_replace($fruits, $replacefruits);
	echo print_r($output);
	echo '<hr>';
	}
	
	public function arrayMerge($numbers, $numbers2) {
	echo '<h3> Merge Arrays </h3><br>';
	$output= array_merge ($numbers, $numbers2);
	echo print_r($output);
	echo '<hr>';
	}
	
	public function arrayPush ($fruits) {
	echo '<h3> Add Values to the Array <h3><br>';
	array_push($fruits, "grapes", "mango");
	echo print_r($fruits);
	echo '<hr>';
	}

	public function arrayKeys($colors) {
	echo '<h3> Keys from the Array <h3><br>';
	print_r(array_keys($colors, "purple"));
	echo '<hr>';
	}
	
	public function arraySlice($fruits) {
	echo '<h3> Take Slice of the Array </h3>';
	print_r(array_slice($fruits, 1, -1));
	echo '<hr>';
	}
	
	public function arraySum($numbers) {
	echo '<h3> Sum the Values in the Array <h3><br>';
	echo 'Sum of the array is ' . array_sum($numbers);
	echo '<hr>';
	}
	
	public function arrayResort($colors) {
	echo '<h3> Resort the Array </h3><br>';
	rsort($colors);
	foreach ($colors as $key =>$val) {
		echo "$key = $val";
		}
	echo '<hr>';
	}

	public function arrayReverse($fruits) {
	echo '<h3> Reverse the Array </h3><br>';
	$reverse= array_reverse($fruits);
	echo print_r($reverse);
	echo '<hr>';
	}
	
	public function arrayShuffle($numbers) {
	echo '<h3> Shuffle the Array </h3><br>';
	shuffle($numbers);
	foreach ($numbers as $number) {
		echo "$number";
		}
	echo '<hr>';
	}

	public function __deconstruct () {
						}

}
?>
