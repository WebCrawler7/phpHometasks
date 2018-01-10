<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
  <table border="2px" cellpadding="10px">
    <tbody>
	<?php

    $friendsCounter = 0;
    foreach ($friendsList as $friendName => $friendPhoneNumber) {
      ?>
      <tr>
        <td>
          <?php echo $friendsCounter; ?>
        </td>
        <td>
          <?php echo $friendName; ?>
        </td>
        <td>
          <?php echo $friendPhoneNumber;
          $friendsCounter++; ?>
        </td>
      </tr>
    <?php } ?>

<!-- “таблица с друзьями”
Создать страницу на которой в таблице (самостоятельная часть - найти как это верстать) указан список друзей (можно воображаемых)
Усложнение: указать в отдельной колонке (!) номера телефонов для этих друзей. В идеале, не использовать другие переменные/массивы -->
    </tbody>
  </table>
</body>
</html>