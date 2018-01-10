<?php
require_once "/model/index.php";

$goodsListFiltered = filtering($vowels, $goodsList);
// var_dump($goodsListFiltered);

require_once "/view/index.php";
?>

<!-- “что-нибудь о прерываниях”
Создать страницу со списком предметов (хранится в массиве), выводить список до тех пор пока не встретится элемент (слово) начинающееся с гласных букв -->
