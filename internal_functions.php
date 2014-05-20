<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results




function sempty($a){
	if (isset($a) && !empty($a)){
			if($a === NULL){
				echo  "$a is SET" . PHP_EOL;
			}
		echo  "$a is SET" . PHP_EOL;
	} elseif (empty($a)) {
			echo "$a is EMPTY" . PHP_EOL;
	} elseif(serialize($a) == true){
			if(serialize($a) == false){
				echo "$a can't be unserialized" . PHP_EOL;
			}
		echo serialize($a) . PHP_EOL;
	}
}

sempty($array);
echo serialize($array) . PHP_EOL;
echo unserialize(a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}) .  PHP_EOL;