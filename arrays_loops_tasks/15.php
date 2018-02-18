<?php
	
	$arr = [4, 2, 5, 19, 13, 0, 10];
	
	$count = 0;
	
	print_r($arr);
	
	echo '<br>';
	
	foreach ($arr as $e) {
		$count++;
	}
	
	echo "Количество элементов этого массива $count.";