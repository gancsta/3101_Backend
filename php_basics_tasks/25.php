<?php
	
	echo htmlentities("<?php - полная версия открывающего тега") .'<br/>';
	echo htmlentities("<? - короткий открывающий тег") .'<br>';
	echo htmlentities("Знак '=' в записи '<?=', в коротком открывающем теге, заменяет 'echo'");