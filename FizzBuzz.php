<?php

// Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number 
// and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.

for ($a = 1; $a <= 100; $a++){
	if($a % 3 == 0 && $a % 5 == 0){
		echo "FizzBuzz\n";
	}	
	elseif($a % 3 == 0){
		echo "Fizz\n";
	}
	elseif($a % 5 == 0){
		echo "Buzz\n";
	}
	else{
		echo "$a\n";
	}
}