<?php
	
	$arr = [4, 2, 5, 19, 13, 0, 10];
	
	print_r($arr);
	
	echo '<br>';
	
	$a = [2, 3, 4];
	
	foreach ($a as $e) {
		
		if (in_array($e, $arr)) {
			
			echo "$e Есть! <br>";
		
		} else {
        
			echo "$e Нет! <br>";
		
		}
	}
	