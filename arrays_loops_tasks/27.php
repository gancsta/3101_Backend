<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Генератор случайных (заданных) таблиц</title>
</head>
<body>
	<h1>Генератор случайных (заданных) таблиц</h1>
	<form action="" method="post">
		<input type="text" name="cols" value="10">Введите к-во колонок<br>
		<input type="text" name="rows" value="5">Введите к-во строк<br>
		<button type="submit" name="submit">Нарисовать</button>
	</form>	
	
	<?php 
		
		$colors = array('red','yellow','blue','gray','maroon','brown','green');
		
		$row = 0;
		
		$cols = 0;
		
		$output = '<table width="800px" cellspacing="5" cellpadding="10" border="1">';
		
		if ((isset($_POST['submit'])) && (is_numeric($_POST['cols'])) && (is_numeric($_POST['rows']))) {
			
			for ($row = 1; $row <= $_POST['rows']; $row++) {
				
				$output .= '<tr>';
					
					for ($cols = 1; $cols <= $_POST['cols']; $cols++) {
					
						$rand_num = rand(0,100);
						$rand_color = array_rand($colors);
			
						$output .= "<td bgcolor='{$colors[$rand_color]}' align='center'>{$rand_num}</td>";
					}
				
				$cols = 1;
			
			}

		$row = 1;
		
		$output .= '</table>';
		
		echo $output;
			
		} else {
			
			echo "Введите значения (* только числа)";
		
		}	
		
	?>
	
</body>
</html>	