<?php

function add($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a + $b;
	} else {
		echo "Error. Both $a & $b need numeric Values";
	}
	echo PHP_EOL;
}

add(10,2);

function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a - $b;
	} else {
		echo "Error. Both $a & $b need numeric Values";
	}
	echo PHP_EOL;
}

subtract(10,2);

function multiply($a, $b){
	 if (is_numeric($a) && is_numeric($b)){
		echo $a * $b;
	} else {
		echo "Error. Both $a & $b need numeric Values";
	}
	echo PHP_EOL;
}

multiply(10,2);

function divide($a, $b){
	if (is_numeric($a) && is_numeric($b)){
			if($b == 0){
				echo  "Error. Unable to divide by 0";
			} else{
				echo $a / $b;
			}
	} else {
		echo "Error. Both $a & $b need numeric Values";
	}
	echo PHP_EOL;
}

divide(10,'test');

function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a % $b;
	} else {
		echo "Error. Both $a & $b need numeric Values";
	}
	echo PHP_EOL;
}

modulus(10,2);