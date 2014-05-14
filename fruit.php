<?php

$fruits = array('apples', 
				'banana', 
				'strawberries', 
				'oranges', 
				'cherries'
);

for($i = 0 ; $i < count($fruits); $i++){ 
	echo $fruits[$i] . PHP_EOL; 
}


// $fruits = array(
// 	'apples' => 'red' ,
// 	'bananas' => 'yellow' ,
// 	'strawberries' => 'red', 
// 	'oranges' => 'orange', 
// 	'cherries' => 'red'
// );

// foreach($fruits as $fruit => $color){
// 	if($fruit == 'apples'){
// 		echo "$fruit are " . $color . PHP_EOL;
// 	}
// }
