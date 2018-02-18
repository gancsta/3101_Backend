<?php 
	
	$result = '';

	$arr = [1, 20, 15, 17, 24, 35];
	
	print_r($arr);
	
	foreach ($arr as $value) {
		$result = $result + $value;
	}
	
	 echo "<br> Сума чисел заданого масива равна: $result";