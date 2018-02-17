<?php 
	$age = rand(-30, 100);
	
	echo "Возвраст: {$age} (rand 1 - 100)<br/>";
	
	if ($age >= 18 && $age <= 59) {
		echo 'Вам еще работать и работать';
	} elseif ($age > 59) {
		echo 'Вам пора на пенсию';
	} elseif ($age >=0 && $age <= 17 ) {
		echo 'Вам еще рано работать';
	} else {
		echo 'Неизвестный возраст';
	}