<?php
require_once "/model/index.php";
$friendsList = friendsListGenerator(6);
// var_dump($friendsList);
require_once "/view/index.php";
?>
<!-- “таблица с друзьями”
Создать страницу на которой в таблице (самостоятельная часть - найти как это верстать) указан список друзей (можно воображаемых)
Усложнение: указать в отдельной колонке (!) номера телефонов для этих друзей. В идеале, не использовать другие переменные/массивы -->