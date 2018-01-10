<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

function filtering (array $arr) {
  $odd = [];
  for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i]%2 != 0) {
      $odd[] = $arr[$i];
    }
  }
  return $odd;
}
?>