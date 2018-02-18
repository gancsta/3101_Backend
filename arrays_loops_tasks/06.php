<?php 
	
	$en = [];
	$ru = [];
	
	$arr = ['green'=>'зеленый','red'=>'красный','blue'=>'голубой'];
	
	print_r($arr);
	
	foreach ($arr as $key => $value) {
		array_push($en,$key);
		array_push($ru,$value);
	}
	
	echo '<pre>';
	print_r($en);
	echo '</pre>';
	echo '<br>';
	echo '<pre>';
	print_r($ru);
	echo '</pre>';	