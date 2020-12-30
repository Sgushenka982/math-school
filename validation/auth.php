<?php 
	$email=filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	$pass=filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
	//$regex = '/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/';// регулярное выражение для проверки написания адреса электронной почты
	//if (!preg_match($regex, $email))// Проверка правильности ввода email
	//    {
	//        echo "Введите email правильно";
	//        exit();
	//    }

	$pass = md5($pass."sol23");	

	require "../blocks/connect.php";

	$result=$mysqli ->query("SELECT * FROM `users` WHERE `email`='$email' AND `pass`='$pass' AND `email_confirmed`=1");
	$user = $result->fetch_assoc();
	if (count($user) == 0) {
		echo"Пользователь не найден, введен неправильный логин/пароль";
		exit();
	}

	setcookie('user',$user['name'],time()+3600,"/");

	$mysqli ->close();
?>