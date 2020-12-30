<?php
$dbtest = @mysqli_connect("localhost:3306", "g64180_testing_u", "4>?rCEfdX^6SOU^6", "g64180_testing") or die('Нет соединения с БД');
mysqli_set_charset($dbtest, 'utf8') or die('Не установлена кодировка соединения');
?>