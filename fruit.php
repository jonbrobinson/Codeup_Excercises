<?php

$fruits = array(
	'apples' => 'red' ,
	'bananas' => 'yellow' ,
	'strawberries' => 'red', 
	'oranges' => 'orange', 
	'cherries' => 'red'
);

// for($i = $fruits ; $i <= 4 ; $i += 1){ 
// 	echo ($i . PHP_EOL); 
// }

foreach($fruits as $fruit => $color){
	if($fruit == 'apples'){
		echo "$fruit are " . $color . PHP_EOL;
	}
}
