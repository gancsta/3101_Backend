<?php
	
	$arr = ['Понедельник', 'Вторник', 'Среда', 'Четвер', 'Пятница', 'Суббота', 'Воскресенье'];

	print_r($arr);
	
	echo '<br>';
	
	foreach ($arr as $e) {
	
		if (($e == "Суббота") || ($e == "Воскресенье")) {
			
			echo "<span style=\"color: red; font-weight: bold;\">$e</b>, ";
		
		} else {
		
			echo $e . ', ';
		
		}
	
	}