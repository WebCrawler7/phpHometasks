<?php
// количество "счастливых" билетов, где счастливый тот, в котором сумма 1-й половины числа равна сумме 2-й половины числа номера билета
// для 10000 = 670
// для 1000000 считал 21 секунду. результат = 55252
// 10 exp 8 не считает - превышен лимит в 120 секунд

$numberOfTickets = 1000000;

function numberOfLuckyTickets($numberOfTickets) {
  $count = 0;
  $halfLength = floor(sqrt($numberOfTickets));
  for ($i = 0; $i < $halfLength; $i++) {    // старшие разряды
    for ($j = 0; $j < $halfLength; $j++) {    // младшие разряды
      if (numeralsSum($i) == numeralsSum($j)) {
        $count++;
      }
    }
  }
  return $count;
}

function numeralsSum($number) {           // сумма цифр строки
  $sum = array_sum(str_split($number));
  return $sum;
}

echo "Количество счастливых билетов в пачке " . $numberOfTickets . " = " . numberOfLuckyTickets($numberOfTickets);

// function numberOfLuckyTickets($numberOfTickets) {        // в таком виде вычисляет за 15 сек.
//   $count = 0;
//   $halfLength = floor(sqrt($numberOfTickets));
//   for ($i = 0; $i < $halfLength; $i++) {    // старшие разряды
//     for ($j = 0; $j < $halfLength; $j++) {    // младшие разряды
//       if (array_sum(str_split($i)) == array_sum(str_split($j))) {
//         $count++;
//       }
//     }
//   }
//   return $count;
// }
?>