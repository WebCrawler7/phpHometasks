<?php

// Написать функцию которая проверяет является ли входная строка панграмом
$string = "abcqdefghijklmnoprstuvwxyasz";
$latinCharSet = "abcdefghijklmnopqrstuvwxyz";

function isPangram($str, $charSet) {
  $str = str_split($str);
  for ($i = 0; $i < count($str); $i++) {
    $charSet = str_replace($str[$i], "", $charSet);
  }
  if ($charSet == "") {
    return 1;
  } else {
    return 0;
  }
}

echo isPangram($string, $latinCharSet);

?>