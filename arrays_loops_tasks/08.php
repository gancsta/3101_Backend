<?php 

	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	
	print_r($arr);
	
	foreach ($arr as $value) {
		$a = implode($arr);
	}	
	
	echo '<br>';
	
	var_dump($a);