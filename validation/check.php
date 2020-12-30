<?php
	    $email=filter_var($_POST['email'],FILTER_SANITIZE_STRING);
	    //$regex = '/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/';// регулярное выражение для проверки написания адреса электронной почты
	    //if (!preg_match($regex, $email))// Проверка правильности ввода email
	    //{
	    //    echo "Введите email правильно";
	    //}
	    require "../blocks/connect.php";
	    $result=$mysqli ->query("SELECT * FROM `users` WHERE `email`='$email'");
	    $user=$result->fetch_assoc();
	    if(count($user) !== 0){
	    	echo "Данный email уже используется";
	    	exit();
	    }
	    $mysqli ->close();
		$pass=filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
		$name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
		$surname=filter_var($_POST['surname'],FILTER_SANITIZE_STRING);
		$pass = md5($pass."sol23");	
		$hash = md5($name.time());
		$headers  = "MIME-Version: 1.0\r\n"; // Переменная $headers нужна для Email заголовка
	    $headers .= "Content-type: text/html; charset=utf-8\r\n";
	    $headers .= "To: <$email>\r\n";
	    $headers .= "From: <mail@example.com>\r\n";
	    // Сообщение для Email
	    $message = '
	            <html>
	            <head>
	            <title>Подтвердите Email</title>
	            </head>
	            <body>
	            <p>Что бы подтвердить Email, перейдите по <a href="http://onlinemathschool.ru/validation/confirmed.php?hash=' . $hash . '">ссылка</a></p>
	            </body>
	            </html>
	            ';
	    $subject = 'Подтвердите Email на сайте'; //Тема сообщения
        require "../blocks/connect.php";
		if(!$mysqli ->query("INSERT INTO `users` (`email`, `pass`,`name`,`surname`,`hash`,`email_confirmed`) VALUES('$email','$pass','$name','$surname','$hash', 0)")){
			echo "Данные не были внесены";
		}// Добавление пользователя в БД
        if (!mail($email, $subject, $message, $headers)) // проверяет отправилась ли почта
	    {
	        echo "сообщение не отправлено";
	    }
	    $mysqli ->close();
?>