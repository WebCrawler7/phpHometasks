<?php
  function friendsListGenerator ($number = 5) {  // прошу прощения за извращения...
    $friendsList = [];
    for ($i = 0; $i < $number; $i++) {
      $friendsList["Friend" . $i] = "(+38) 067-123-45-6" . $i;  // интересно, как сработает приведение типов
    }
    return $friendsList;
  }
?>