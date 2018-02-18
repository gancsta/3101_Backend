<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Программа, которая считает количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе</title>
</head>
<body>
	<h1>Программа, которая считает количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе</h1>
	<form action="" method="post">
		<input type="text" name="chislo">Введите число<br>
		<input type="text" name="nabor">Введите набор чисел<br>
		<button type="submit" name="submit">Расчитать</button>
	</form>
	
	<?php
	
	if ((isset($_POST['submit'])) && (is_numeric($_POST['chislo'])) && (is_numeric($_POST['nabor']))) {
		
		$sum = 0;
		$abc = $_POST['chislo'];
		$nabor = $_POST['nabor'];
		
		$symvol = preg_split('//', $nabor, -1, PREG_SPLIT_NO_EMPTY);
		
		print_r($symvol);	
		
		echo '<br>';
		
		foreach ($symvol as $key => $value) {
			
			if ($value == $_POST['chislo']) {
				$sum = $sum + 1;
			}
		}
		
		echo "<br> Количество вхождений цифры \"$abc\" <br> в заданом диапазоне \"$nabor\" <br> равно <b>$sum</b>";
	
	} else {
		
		echo "Нужно ввести число";
	}	
	
	?>
	
</body>
</html>	