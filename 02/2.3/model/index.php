<?php
$vowels = ["a", "e", "u", "o", "i", "y"];
$goodsList = ["cup", "brush", "box", "flash", "forceps", "glue", "pincers", "onion", "sweets"];

function filtering (array $vowels, array $goodsList) {
  $goodsListFiltered = [];
  for ($i = 0; $i < count($goodsList); $i++) {
    for ($j = 0; $j < count($vowels); $j++) {
      if (mb_strtolower($goodsList[$i]{0}) == mb_strtolower($vowels[$j]{0})) {  // привести к нижнему регистру и взять 1-ю букву
        return $goodsListFiltered;
      }      
    }
    $goodsListFiltered[] = $goodsList[$i];
  }
  return $goodsListFiltered;
}
?>

<!-- “что-нибудь о прерываниях”
Создать страницу со списком предметов (хранится в массиве), выводить список до тех пор пока не встретится элемент (слово) начинающееся с гласных букв -->