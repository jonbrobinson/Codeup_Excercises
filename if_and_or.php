<?php
$x = 0;
$y = 5;
$z = 10;


//IF $x < $y < $z then echo "{$x} < {$y} < {$z}\n";

if ($x < $y && $y < $z){
	echo "{$x} < {$y} < {$z}\n";
}


// IF $x is greater that 0 OR Lees than 10, echo the result as a sentence 
"$x is greater than 0 or less than 10\n";

if ($x > 0 || $x < 10) {
	echo "$x is greater than 0 or less than 10\n";
}

if ($y > 0 || $y < 10) {
	echo "$y is greater than 0 or less than 10\n";
}

if ($z > 0 || $z < 10) {
	echo "$z is greater than 0 or less than 10\n";
}


// IF $x is greater than 0 AND less than 10, echo the result as sentence 
"$x is greater than 0 AND less than 10\n";

if ($x > 0 && $x < 10) {
	echo "$x is greater than 0 AND less than 10\n";
}

if ($y > 0 && $y < 10) {
	echo "$y is greater than 0 AND less than 10\n";
}

if ($z > 0 && $z < 10) {
	echo "$z is greater than 0 AND less than 10\n";
}


?>