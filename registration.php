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
        <form id="mailForm"  class="form-signin" method="post" >
            <a href="index.php"><img src="../img/innovation.png" width="50px" height="50px"></a>
            <h1>Форма регистрации</h1>
            <input type="email" name="email" class="form-contrl" id="email" placeholder="Введите электропочту">
            <input type="text" name="name" class="form-contrl" id="name" placeholder="Введите имя">
            <input type="text" name="surname" class="form-contrl" id="surname" placeholder="Введите Фамилию">
            <input type="password" name="pass" class="form-contrl" id="pass" placeholder="Введите пароль">
            <input type="password" name="pass_rep" class="form-contrl" id="pass_rep" placeholder="Введите повторный пароль">
            <button id="sendMail" class="btn btn-lg btn-primary btn-block "  type="button" >Зарегистрироваться</button>
            <div id="errorMess"></div>
            <a class="back" href="authform.php"><<Назад</a>
            <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>
        <div class="overlay js-overlay-thank-you">
            <div class="popup js-thank-you">
                <h2>Поздравляю с регистрацией</h2>
                <p>Подтвердите указанный email на почте</p>
                <div class="close-popup js-close-thank-you"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script  src="js/SendToPhpR.js"></script>
</body> 
</html>