<?php

// Create a file named foreach.php in you exercises directory. Commit each step and push to GitHub.

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array,
// null, or string.

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.

// Create a loop that will echo out every value, including those nested in arrays. Output should look like this.


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12+7", false, (string) 11);

foreach($things as $thing){
	if (is_array($thing)){
		echo implode(",",$thing);
	} elseif (is_bool($thing)){
	} elseif (is_float($thing)){
	} elseif (is_double($thing)){
	} elseif (is_real($thing)){
	} elseif (is_int($thing)){
	} elseif (is_long($thing)){
	} elseif (is_null($thing)){
	} elseif (is_numeric($thing)){
	} elseif (is_scalar($thing)){
	} elseif (is_string($thing)){
	}
	echo $thing;
	echo PHP_EOL;	
}