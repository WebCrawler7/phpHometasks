<?php 

// Написать функцию которая конвертирует число состоящее из арабских (обычных) цифр  в число состоящее из римских цифр

  function toRome($numberArab) {
    if (inputCheck($numberArab)) {
      $numberRome = "";
      $numberArab = array_reverse(str_split($numberArab));
      for ($i = count($numberArab) - 1; $i >= 0; $i--) {
        $numberRome = $numberRome . digitConverter($numberArab[$i], $i);
      }
    return $numberRome;
    } else {
    return;
    }
  }

  function digitConverter($digit, $base) {    // $digit - цифра, $base - степень цифры (положение в числе)
    $arr = ["1" => "I", "5" => "V", "10" => "X", "50" => "L", "100" => "C", "500" => "D", "1000" => "M"];

      if (($digit >= 0) & ($digit <= 3)) {
        $j = "";
        for ($i = 0; $i < $digit; $i++) {
          $j = $j . $arr[pow(10, $base)];
        }
        return $j;
      } elseif ($digit == 4) {
        return $arr[pow(10, $base)] . $arr[5 * pow(10, $base)];
      } elseif (($digit >= 5) & ($digit <= 8)) {
        $j = $arr[5 * pow(10, $base)];
        for ($i = 5; $i < $digit; $i++) {
          $j = $j . $arr[pow(10, $base)];
        }
        return $j;
      } elseif ($digit == 9) {
        return $arr[pow(10, $base)] . $arr[pow(10, $base + 1)];
      }
  }

  function inputCheck($numberArab) {        // проверка на корректность ввода
    if (!is_int($numberArab)) {
      echo "Input is not integer! Please, correct the input.";
      return false;
    } elseif (($numberArab > 3999) | ($numberArab < 0)) {
      echo "The number is out of range! Please, correct the input.";
      return false;
    }
      return true;
  }

echo toRome(1489);
?>