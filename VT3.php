<table border="0">
<form method="post">
	<label for="text">Введите данные:</label>
	<input type="text" name="text" id="text"><br><br>
	<button type="submit">Добавить данные</button>
	</form>
<?php
$dir = $_POST['text'];
if (is_dir($dir)) {
	$f = scandir($dir);
	echo "<table border='0'>";
    echo '<br/>', '<br/>';
	echo "<tr>"."<th>"."Name file"."</th>"."<th>"."Size, Kb"."</th>"."</tr>";
foreach ($f as $file) {
		$filesize = round(filesize($dir . '/' . $file)/1024);
			echo "<tr>"."<th>".$file."</th>"."<th>".$filesize."</th>"."</tr>";
}
echo "</table>";
} else {
	echo 'Error';
}

// написать функцию, формирующую полный список файлов в указанном каталоге
//(включая подкаталоги) и считающую общий объём файлов. Имя каталога, в котором следует выполнять поиск, получать
//через веб-форму. Отобразить в табличном виде.
?>
</table>
