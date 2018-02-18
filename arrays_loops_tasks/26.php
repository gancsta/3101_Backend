<?php
	
	$arr = [];
	
	$calc1 = 1;
	
	for ($i=1; $i <= 10; $i++) {
		$arr[] = rand(-20,100);
	}
	
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	foreach ($arr as $key => $value) {
		
		if ($key % 2 == 0 && $value > 0)  {
			$calc1 *= $value;
		} else {
			echo "Непарные индексы и числа <0 <br> {$key} => {$value} <br>";
		}
		
	}
	
	echo "<br> $calc1";