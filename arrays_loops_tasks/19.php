<?php
		
	$arr = ['Понедельник', 'Вторник', 'Среда', 'Четвер', 'Пятница', 'Суббота', 'Воскресенье'];
	
	$day = $arr[date("N")-1];

	print_r($arr);
	
	echo '<br>';
	
	foreach ($arr as $e) {
	
		if ($e == $day) {
			
			echo "<span style=\"color:red\"><i>$e</i></span>, ";
		
		} else {
		
			echo $e . ', ';
		
		}
	
	}