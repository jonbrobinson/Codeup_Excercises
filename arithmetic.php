<?php


// Refactor the error messages into their own function, have the other functions use it for error messaging

function error_line($a,$b){
	if(!is_numeric($a) || !is_numeric($b)){
		echo "Error. Both $a & $b need numeric values";
	}
}

function add($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a + $b;
	}
	error_line($a,$b);
	echo PHP_EOL;
}

function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a - $b;
	}
	error_line($a,$b);
	echo PHP_EOL;
}

function multiply($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a * $b;
	}
	error_line($a,$b);
	echo PHP_EOL;
}

function divide($a, $b){
	if (is_numeric($a) && is_numeric($b)){
			return ($b == 0 ? return FALSE : $a / $b);
	}
	error_line($a,$b);
	echo PHP_EOL;
}

function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a % $b;
	}
	error_line($a,$b);
	echo PHP_EOL;
}

echo add(10,2) . PHP_EOL;
echo subtract(10,2) . PHP_EOL;
echo multiply(10,2) . PHP_EOL;
echo divide(10,0) . PHP_EOL;
echo modulus(10,2) . PHP_EOL;
