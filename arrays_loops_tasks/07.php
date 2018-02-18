<?php 

	$arr = [2, 5, 9, 15, 0, 4];
	
	print_r($arr);
	
	foreach ($arr as $value) {
		if ($value > 3 && $value < 10) {
			echo "<br> $value";
		}
	}