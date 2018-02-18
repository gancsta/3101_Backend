<?php 
	
	$result = '';

	$arr = [26, 17, 136, 12, 79, 15];
	
	print_r($arr);
	
	foreach ($arr as $value) {
		$result = $result + pow($value, 2);
	}
	
	echo "<br> Сумма квадратов элементов этого массива равна: $result";