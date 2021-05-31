<form method="post">
	<label for="text">Введите числа для 1 массива:</label>
	<input type="text" name="text" id="text"><br>
  <label for="text2">Введите числа для 2 массива:</label>
	<input type="text2" name="text2" id="text2"><br><br>
	<button type="submit">Добавить новые данные</button>
	</form>

<?php 
$array1 = explode(" ", $_POST['text']);
$array2 = explode(" ", $_POST['text2']);
print_r("Array 1: ");
print_r($array1);
print_r('<br/>' . "Array 2: ");
print_r($array2);
echo '<br/>', '<br/>';
print_r('<br/>' . "Объедененный: ");
foreach ( $array2 as $array2 ) {
  $array1[]=$array2; //добавление элемента в первый
}
print_r($array1);
print_r('<br/>' . "Четные числа: ");
foreach ( $array1 as $array1 ) {
  if (($array1 % 2) == 0) {
    echo $array1, " ";
  }
}


//Создайте 2 массива с целыми числами через 2 поля формы, объедините два массива
//в один (не используя специальные функции PHP типа array_merge(arr1,arr2)!), Выведите все чётные числа из получившегося массива.
?>
