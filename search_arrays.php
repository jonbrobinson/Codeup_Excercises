<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function array_tf($needle,$haystack){

		$test = array_search($needle, $haystack);

		if($test === false){
			return false;
		} else{
			return true;
		}
}
var_dump(array_tf('Tina',$names));

function array_common_cont($array1, $array2){

$count = 0;

	foreach($array1 as $value){
		if(array_tf($value,$array2)){
			$count++;
		}
	}
	return $count;
}