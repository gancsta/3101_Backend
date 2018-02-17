<?php 
	$age = rand(1, 100);
	
	echo "Возвраст: {$age} (rand 1 - 100)<br/>";

	if ($age >=18 && $age <= 59) {
		echo 'Вам еще работать и работать';
	} elseif ($age > 59) {
		echo 'Вам пора на пенсию';
	}