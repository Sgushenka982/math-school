<?php 
    $hash = filter_var($_POST['hash'],FILTER_SANITIZE_STRING);
    $pass=filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
    $pass = md5($pass."sol23");
    require "../blocks/connect.php"; // Подключаем коннект к БД
    $result=$mysqli->query("SELECT `id` FROM `users` WHERE `hash`='$hash'"); 
    $row=$result ->fetch_assoc();         
    $id=$row['id'];
    if(!$mysqli->query("UPDATE `users` SET `pass`='$pass' WHERE `id`='$id'" )){
        echo "Упс... Что-то пошло не так";
    }    
    $mysqli->close();

?>