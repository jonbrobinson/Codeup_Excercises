<?php

// Create a do-while loop that starts at 2, and displays the result $a * $a on each line while $a 
// is less than 1,000,000. Output should equal

$a = 2;

do {
	echo $a . PHP_EOL;
	$a *= $a;
} while ($a < 1000000);

?>