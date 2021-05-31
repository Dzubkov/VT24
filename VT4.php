<form method="post">
	<label for="text">Input text:</label>
	<input type="text" name="text" id="text"><br>
	<button type="submit">Add new data</button>
	</form>
<?php
$regexp = "/[a-z|а-я]{7}/";
$lines = explode(" ", $_POST['text']); 
foreach ($lines as $line) {
    if (preg_match($regexp, $line)) { //проверка на регулярку
        echo substr($line,0,6)."* ";
    } else {
        echo $line." ";
    }
}

//Дан длинный текст, в нём встречаются слова длиннее 7 символов! Если слово длиннее 7 символов, то необходимо: оставить первые 6 символа и добавить звёздочку. Остальные
//символы вырезаются. Шаблон: "я стану крутым программистом после БГУИРа" . Результат: " я
//стану крутым програм* после БГУИРа ". Текст вводить через форму.
?>
