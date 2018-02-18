<?php 
	
	$arr = ['green'=>'зеленый','red'=>'красный','blue'=>'голубой'];
	
	print_r($arr);
	
	foreach ($arr as $key => $value) {
		echo "<br> $key";
	}
	
	foreach ($arr as $key => $value) {
		echo "<br> $value";
	}