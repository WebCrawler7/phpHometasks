<?php

// написать функцию которая разворачивает массив

$arr = [1,2,3,4,5,6,7,8,98];

function array_reverseMy($array) {
  $array_rev = [];
  for ($i = count($array) - 1; $i >= 0; $i--) {
    $array_rev[] = $array[$i];
  }
  return $array_rev;
}

var_dump(array_reverseMy($arr));

?>