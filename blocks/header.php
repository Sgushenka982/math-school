<header>
    <h5 class="logo">
      <a href="index.php">
        <img src="../img/innovation.png" width="50px" height="50px">
      </a>
      Math Sciense
    </h5>
      <nav class="menu">
        <a class="p-2 text-dark" href="index.php">Главная</a>
        <a class="p-2 text-dark" href="#">Учебник</a>
        <a class="p-2 text-dark" href="study.php">Задания</a>
        <a class="p-2 text-dark" href="testing.php">Тесты</a>
      </nav>
      <?php 
            if ($_COOKIE['user'] == ''):
        ?>
      <a class="button-menu" href="authform.php">Войти</a>
      <?php else: ?>
            <a class="button-menu" href="validation/exit.php"><?=$_COOKIE['user']?></a>
        <?php   endif; ?>
</header>