<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Дипломчик</title>
</head>
<body >
    <div class="text-center">
    <form id="mailForm" class="form-signin" method="post">
        <a href="index.php"><img src="../img/innovation.png" width="50px" height="50px"></a>
        <h1>Вход</h1>
        <input type="email" name="email" class="form-contrl" id="email" placeholder="Введите электропочту">
        <input type="password" name="pass" class="form-contrl" id="passA" placeholder="Введите пароль">
        <button id="sendMail" class="btn btn-lg btn-primary btn-block " type="button" >Войти</button>
        <div id="errorMess"></div>
        <a class="forgetpass" href="forgetpass.php">Забыли пороль?</a><br>
        <a class="new-person" href="registration.php">Зарегестрироваться</a>
        <p class="mt-5 mb-3 text-muted">© 2020</p>
    </form>
    </div>
    <div class="overlay js-overlay-thank-you">
        <div class="popup js-thank-you">
            <p>Пользователь не найден, введен неправильный логин/пароль</p>
            <div class="close-popup js-close-thank-you"></div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script  src="js/SendToPhpA.js"></script>
</body> 
</html>