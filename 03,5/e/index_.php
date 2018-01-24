<?php

$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];

function searchWord($board, $word) {
  $height = count($board);
  $width = count($board[0]);    // можно сделать проверку на одинаковость длины вложенных массивов
  // $word = str_split($word);
  $entry_symbol = str_split($word)[0];
  $result = 0;
  // var_dump($word);
  // var_dump($board);
  // echo $height . " " . $width . " " . $entry_symbol;

  // а что, если точек входа может быть несколько? Например, строк, начинающихся с "b" или "d" или "m"
  // ищем и проверяем все точки входа!!!

  for ($i = 0; $i < $width; $i++) {         // вызываем checkWord к каждой точке входа
    if ($board[0][$i] == $entry_symbol) {
      $result =+ checkWord($board, $word, $i, 0);
    }
    if (($height > 1) && ($board[$height - 1][$i] == $entry_symbol)) {
      $result =+ checkWord($board, $word, $i, $height - 1);
    }
  }
  if ($height > 2) {
    for ($i = 1; $i < $height - 1; $i++) {         // отступаем сверху и снизу по строке т.к. они уже пройдены предыдущим кодом
      if ($board[$i][0] == $entry_symbol) {
        $result =+ checkWord($board, $word, 0, $i);
      }
      if ($board[$i][$width - 1] == $entry_symbol) {
        $result =+ checkWord($board, $word, $width - 1, $i);
      }
    }
  }
  return $result;
  // if ($result > 0) {
  //   return true;
  // } else {
  //   return false;
  // }
}

function checkWord($board, $word, $x, $y) {
  echo "x = " . $x . " " . "y = " . $y . "<br>";
  echo "strlen($word) = " . strlen($word) . "<br>";
  var_dump($word);
  $board[$y][$x] = null;  // чтобы запретить повторение символов, проще записывать в посещенные места знак, не бывающий в проверяемой строке
  for ($i = 1; $i < strlen($word); $i++) {
    if (isset($board[$y][$x + 1]) && ($word[$i] == $board[$y][$x + 1])) {
      // echo "y = " . $y . "x + 1 = " . $x + 1 . " 54<br>";
      // echo "i = $i, y = $y, x = $x, word($i) = $word[$i], board(y,x+1) = $board[$y][$x + 1], 54<br>";
      $x++;
      $board[$y][$x] = null;
      continue;
    } elseif (isset($board[$y][$x - 1]) && ($word[$i] == $board[$y][$x - 1])) {
      // echo "y = " . $y . "x - 1 = " . $x - 1 . " 59<br>";
      echo "y = $y, x = $x, 59<br>";
      $x--;
      $board[$y][$x] = null;
      continue;
    } elseif (isset($board[$y + 1][$x]) && ($word[$i] == $board[$y + 1][$x])) {
      // echo "y + 1 = " . $y + 1 . "x = " . $x . " 64<br>";
      echo "y = $y, x = $x, 64<br>";
      $y++;
      $board[$y][$x] = null;
      continue;
    } elseif (isset($board[$y - 1][$x]) && ($word[$i] == $board[$y - 1][$x])) {
      // echo "y + 1 = " . $y - 1 . "x = " . $x . " 69<br>";
      echo "y = $y, x = $x, 69<br>";
      $y--;
      $board[$y][$x] = null;
      continue;
    } else {
      echo "000";
      var_dump($board);
      return 0;
    }
  }
  echo "111";
  var_dump($board);
  return 1;
}

$checkForTrue = ['abcd', 'abcl', 'admfbl', 'smdc', 'dklm', 'abcdmlkdmfbs'];   // must be true
$checkForFalse1 = ['dlm', 'smdb'];                                        // words that doesn't exists
$checkForFalse2 = ['abcc', 'abcdc', 'dklml'];                             // It's not allowed to use the same letter twice

function batchCheck($wordArr, $board) {                      // автоматизируем проверку
  for($i = 0; $i < count($wordArr); $i++) {
    echo $wordArr[$i] . " " . searchWord($board, $wordArr[$i]) . "<br><br><br>";
  }
}

batchCheck($checkForTrue, $board);
batchCheck($checkForFalse1, $board);
batchCheck($checkForFalse2, $board);

?>