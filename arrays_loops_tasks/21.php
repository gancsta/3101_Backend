<?php

	$a = 1;
	$b = 0;
	$c = "";
	
	while (strlen($a < 10)) {
		
		$c = $c . '1';
		$b = $c * $a;
		echo "$b<br>";
		$a= $a + 1;
		$b = 0;
	
	}