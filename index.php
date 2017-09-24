<?php
$obj= new main ();
$text= "Pretty women wonder where my secret lies.</br>
I'm not cute or built to suit a fashion model's size </br>
But when I start to tell them,</br>
They think I'm telling lies.</br>";
$obj->printthis($text);

class main {

	public function __construct ()  {

	echo 'Phenomenal Woman by Maya Angelou </br>';
					 }
	public function printthis ($text) {
	echo'<h3> Part 1 </h3>';
	print ($text);
	echo '<hr>';
	}
	
	public function __deconstruct () {
						}

}
?>
