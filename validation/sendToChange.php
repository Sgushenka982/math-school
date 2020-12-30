<?php 
	$email=filter_var($_POST['email'],FILTER_SANITIZE_STRING);
	$hash = md5($email.time());

	$headers  = "MIME-Version: 1.0\r\n"; // Переменная $headers нужна для Email заголовка
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "To: <$email>\r\n";
	$headers .= "From: <mail@example.com>\r\n";
	// Сообщение для Email
	$message = '
	        <html>
	        <head>
	        <title>Смените пароль</title>
	        </head>
	        <body>
	        <p>Что бы сменить пароль, перейдите по <a href="http://onlinemathschool.ru/PageChangePass.php?hash=' . $hash . '">ссылке</a></p>
	        </body>
	        </html>
	        ';
	$subject = 'Смените пароль на сайте'; //Тема сообщения

	require "../blocks/connect.php";

	$result=$mysqli ->query("SELECT `id` FROM `users` WHERE `email`='$email'");
	$user = $result->fetch_assoc();
	if (count($user) == 0) {
		echo"Пользователь не найден, введен неправильный логин/пароль";
		exit();
	} else{
		$id=$user['id'];
		$mysqli->query("UPDATE `users` SET `hash`='$hash' WHERE `id`='$id'" );
	}

	$mysqli->close();

	if (!mail($email, $subject, $message, $headers)) // проверяет отправилась ли почта
	    {
	        echo "сообщение не отправлено";
	        exit();
	    }

 ?>