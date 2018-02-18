<?php
	
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	
	print_r($arr);
	
	echo '<br>';
	
	foreach ($arr as $e) {
	
		if ($e % 3 == 0) {
			
			echo $e . '<br>';
		
		} else {
		
			echo $e . ', ';
		
		}
	
	}
	