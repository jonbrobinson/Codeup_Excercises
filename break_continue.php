<?php

// Create another for loop that counts from 1 to 100, 
// but stops after 10 using break

for ($i = 1; $i <= 100; $i++){
	echo $i . PHP_EOL;
	if ($i == 10){
		break;
	}
}