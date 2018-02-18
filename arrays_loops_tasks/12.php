<?php
	
	$n = 1000;
	$num = 0;
	
	while ($n > 50) {
		$n = $n / 2;
		$num = $num + 1;	
	}
	
	echo "Получилось число $n.<br>";
	echo "Необходимо $num итераций.";