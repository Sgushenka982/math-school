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
    <main>
      <div class="enter">
        <p>Приветсятвую тебя! Раз ты попал сюда, у меня есть подозрения, что у тебя не ве гладко с математикой. С возникшими трудностями я и хочу тебе помочь!!! </p>
      </div>
      <div class="row">
        <h3>Что вообще тут есть?</h3>
        <div class="icons">
          <div class="col-lg-4">
            <img class="ico" src="img/book.png" alt="">
            <p>Учебный материал</p>
          </div>
          <div class="col-lg-4">
            <img class="ico" src="img/homework.png" alt="">
              <p>Задачи разных уровней</p>
          </div>
          <div class="col-lg-4">
            <img class="ico" src="img/test.png" alt="">
            <p>Тесты</p>
          </div>
        </div>
      </div>
      <div class="represent">
        <div class="book">
          <p>Что вообще можно написать нового в тесе урока?<br>Я постарался сделать рабочий материал максимально доступным и понятным в первую очередь для вас</p>
        </div>
        <div class="homework">
          <p>Процесс закрепления информации я тоже постарался упроситить разбив упражнения на уровни сложности, которые ты сможешь сам отрегулировать в зависимости от своих прогрессов<br>Так же ттебе проще будет проверить себя не используя решебник. Тут устроено так, что при выполнении каждого этапа сайт будет проверять правильно ли ты посчита, в случае ошибки будет указано ее место.</p>
       </div>
        <div class="test">
          <p>Ну и последнее что ты сможешь тут сделать это проверить свой итоговый уровень знаний после каждой темы проходя тесты</p>
        </div>
      </div>
      <div>
        <p>Ты еще тут?<br>Я думал ты уже давно начал прокачивать себя!</p>
      </div>
    </main>
    <?php require "blocks/footer.php" ?>
</body> 
</html>
