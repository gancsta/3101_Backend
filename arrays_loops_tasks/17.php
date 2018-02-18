<?php
	
	$arr = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
	
	$month = $arr[date("n")-1];

	print_r($arr);
	
	echo '<br>';
	
	foreach ($arr as $e) {
	
		if ($e == $month) {
			
			echo "<b>$e</b>, ";
		
		} else {
		
			echo $e . ', ';
		
		}
	
	}