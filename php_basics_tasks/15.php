<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Калькулятор</title>
</head>
<body>
	<form>
		<input type="text" name="a">Введите число<br>
		<input type="text" name="b">Введите число
		<input type="hidden" name="ab" value="1">
			<select name="operator"">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				<option value="%">%</option>
		</select>
		<button type="submit">Расчитать</button>
	</form>
	
	<?php 
	
		if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operator'])) {
			
			$a = $_GET['a'];
			$b = $_GET['b'];
			$operator = $_GET['operator'];
			
			 if ($a === 0 || $b === 0 || !$operator) {
				
				$rezultat = '!Ошибка. Введите данные.';
			
			} else {
				
				switch ($operator) {
					
					case '/':
						if (!$b) {
						
							$rezultat = '!Ошибка. Вы патаетесь делить на ноль.';
						
						} else {
						
							$rezultat = "{$a} {$operator} {$b} = " . ($a / $b);
						
						}
					
					break;
					
					case '*':
					
						$rezultat = "{$a} {$operator} {$b} = " . ($a * $b);
					
					break;
					
					case '+':
					
						$rezultat = "{$a} {$operator} {$b} = " . ($a + $b);
					
					break;
					
					case '-':
					
						$rezultat = "{$a} {$operator} {$b} = " . ($a - $b);
					
					break;
					
					case '%':
						if (!$b) {
						
							$rezultat = '!Ошибка. Вы патаетесь делить на ноль.';
						
						} else {
						
							$rezultat = "{$a} {$operator} {$b} = " . ($a % $b);
						
						}
					
					break;
					
					default: 
							
							$rezultat = "Нет данных";
				
				}	
				
			}
			
		}
	
	if (isset($rezultat)) {
		
		echo "<br> Результат: {$rezultat}";
	
	}	
		
	?>
	
</body>
</html>