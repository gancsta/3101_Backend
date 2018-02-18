<?php
	
	$arr = [];
	
	for ($i=1; $i <= 20; $i++) {
		$arr[] = rand(1,100);
	}
	
	print_r($arr);
	
	$min = min($arr);
	$max = max($arr);
	
	echo "<br><br> min - $min, max - $max";
	
	$in_min = array_search($min, $arr);
	$in_max = array_search($max, $arr);
	
	$arr[$in_min] = $max;
	$arr[$in_max] = $min;
	
	echo "<br><br>";
	
	print_r($arr);