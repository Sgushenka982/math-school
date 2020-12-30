<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Дипломчик</title>
</head>
<body>
	<?php require "blocks/header.php" ?>
	<div class="text-center">
		<form id="mailForm" class="form-signin" method="post">
			<input type="password" name="pass" class="form-contrl" id="passChange" placeholder="Введите Пароль">
			<input type="password" name="pass_rep" class="form-contrl" id="pass_rep" placeholder="Введите повторный пароль">
			<button id="sendMail" class="btn btn-lg btn-outline-warning btn-block "  type="button" >Изменить пароль</button>
			<div id="errorMess"></div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script  src="js/GET.js"></script>
    <script  src="js/ChangePass.js"></script>
</body>
</html>