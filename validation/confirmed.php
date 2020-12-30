<?php
if ($_GET['hash']) // Проверка есть ли хеш
{
    $hash = $_GET['hash'];
    require "../blocks/connect.php"; // Подключаем коннект к БД
    $result=$mysqli->query("SELECT `id`, `email_confirmed` FROM `users` WHERE `hash`='$hash'"); 
    $row=$result ->fetch_assoc();
    if ($row['email_confirmed'] == 0)// Если всё верно, то делаем подтверждение
    {          
        $id=$row['id'];
        $mysqli->query("UPDATE `users` SET `email_confirmed`=1 WHERE `id`='$id'" );
        $mysqli->close();
        header('Location:../authform.php');
    }
} 
else 
{
    echo "нет хеша";
}
?>