<?php 
	
	$arr = ['Коля'=>'200','Петя'=>'300','Вася'=>'400'];
	
	print_r($arr);
	
	foreach ($arr as $key => $value) {
		echo "<br> $key — зарплата $value долларов";
	}