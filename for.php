<?php

fwrite(STDOUT, "Please enter a minimum number\n");
$minimum_number = trim (fgets(STDIN));

fwrite(STDOUT, "And a maximum number\n");
$maximum_number = trim(fgets(STDIN));


if (!is_numeric($minimum_number) || !is_numeric($maximum_number)){
	echo "Error Please enter numbers only\n";
	(exit);
}


fwrite(STDOUT, "Finally, please choose you increment value\n");
$increment = trim(fgets (STDIN));

if ($increment == ""){
	$increment = 1;
}

echo "Result\n";

for ($minimum_number; $minimum_number <= $maximum_number; $minimum_number += $increment){
	echo "{$minimum_number}\n";
};
 
