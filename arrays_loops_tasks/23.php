<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Программа, которая считает сумму цифр числа введенного пользователем</title>
</head>
<body>
	<h1>Программа, которая считает сумму цифр числа введенного пользователем</h1>
	<form action="" method="post">
		<input type="text" name="chislo">Введите число<br>
		<button type="submit" name="submit">Расчитать</button>
	</form>
	
	<?php
	
	if ((isset($_POST['submit'])) && (is_numeric($_POST['chislo']))) {
		
		$abc = $_POST['chislo'];
		$symvol = preg_split('//', $abc, -1, PREG_SPLIT_NO_EMPTY);
		$sum = array_sum($symvol);
		
		echo "Сумма цифр равна: $sum";
	} else {
		
		echo "Нужно ввести число";
	}	
	
	?>
	
</body>
</html>	