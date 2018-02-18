<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Таблица умножения</title>
</head>
<body>
<h1>Таблица умножения</h1>
<?php
	
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	
	$output = '<table width="800px" cellspacing="5" cellpadding="10" border="1"><tr><td></td>';
	
	foreach ($arr as $key => $value){
		$output .= '<td>'.$value.'</td>';
	}
	
	for ($i = 0; $i < 10; $i++) {
		$output .='<tr><td>'.$arr[$i].'</td>';
		
		for ($j = 0; $j < 10; $j++){
			$result = $arr[$i]*$arr[$j];
			$output .= '<td>'.$result.'</td>';
		}
		
    $output .= '</tr>';
	
	}
	
	$output .= '</table>';
	
	echo $output;
?>
</body>
</html>