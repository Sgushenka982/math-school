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
			<p>Забыли пароль?<br> Ничего страшного введите ваш email для смены пароля</p>
			<input type="email" name="email" class="form-contrl" id="emailCh" placeholder="Введите электропочту">
			<button id="sendMail" class="btn btn-lg btn-outline-warning btn-block "  type="button" >Восстановить пароль</button>
			<div id="errorMess"></div>
		</form>
		<div class="overlay js-overlay-thank-you">
            <div class="popup js-thank-you">
                <p>На указанный email выслано письмо для смены пароля</p>
                <div class="close-popup js-close-thank-you"></div>
            </div>
        </div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script  src="js/SendToPhpChange.js"></script>
</body>
</html>