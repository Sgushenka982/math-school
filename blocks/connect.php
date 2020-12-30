<?php
	$mysqli = new mysqli(
	"localhost:3306", "g64180_dbuser", ":>6QEuNht5~K8sXQ", "g64180_db");

	/*
	 * Это "официальный" объектно-ориентированный способ сделать это
	 * однако $connect_error не работал вплоть до версий PHP 5.2.9 и 5.3.0.
	 */
	if ($mysqli->connect_error) {
	    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
	            . $mysqli->connect_error);
	}

?>