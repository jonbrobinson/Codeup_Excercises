<?php


// Refactor the error messages into their own function, have the other functions use it for error messaging

function error_line($a,$b){
	if(!is_numeric($a) || !is_numeric($b)){
		echo "Error. Both $a & $b need numeric values";
	}
}

function add($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a + $b;
	} else {
		error_line($a,$b);
	}
	echo PHP_EOL;
}

add(10,'yes');

function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a - $b;
	} else {
		error_line($a,$b);
	}
	echo PHP_EOL;
}

subtract('no',2);

function multiply($a, $b){
	 if (is_numeric($a) && is_numeric($b)){
		echo $a * $b;
	} else {
		error_line($a,$b);
	}
	echo PHP_EOL;
}

multiply('maybe',2);

function divide($a, $b){
	if (is_numeric($a) && is_numeric($b)){
			if($b == 0){
				echo  "Error. Unable to divide by 0";
			} else{
				echo $a / $b;
			}
	} else {
		error_line($a,$b);
	}
	echo PHP_EOL;
}

divide(10,'test');

function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a % $b;
	} else {
		error_line($a,$b);
	}
	echo PHP_EOL;
}

modulus(10,'sorta');






















