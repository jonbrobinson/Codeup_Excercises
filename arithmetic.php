<?php

function add($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a + $b;
	} else {
		echo 'Error. Both $a & $b need numeric Values';
	}
	echo PHP_EOL;
}

add(10,'yes');

function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a - $b;
	} else {
		echo 'Error. Both $a & $b need numeric Values';
	}
	echo PHP_EOL;
}
subtract(10,'red');

function multiply($a, $b){
	 if (is_numeric($a) && is_numeric($b)){
		echo $a * $b;
	} else {
		echo 'Error. Both $a & $b need numeric Values';
	}
	echo PHP_EOL;
}

multiply(10,"to");

function divide($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a / $b;
	} else {
		echo 'Error. Both $a & $b need numeric Values';
	}
	echo PHP_EOL;
}

divide(10,'gre');

function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		echo $a % $b;
	} else {
		echo 'Error. Both $a & $b need numeric Values';
	}
	echo PHP_EOL;
}

modulus('no',2);