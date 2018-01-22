<?php

// написать функцию которая разворачивает строку (не используем http://php.net/manual/ru/function.strrev.php)

$string = "1,2,3,4,5,6,789";

function strReverse($str) {
  return implode(array_reverse(str_split($str)));
}

echo strReverse($string);

?>