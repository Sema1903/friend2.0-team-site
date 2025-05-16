<!DOCTYPE html>
<html>
    <head>
        <title>Работник тех. поддержки</title>
        <meta charset = 'utf-8'>
        <meta name = 'autor' content ='Sema1903'>
        <link rel = 'stylesheet' href = 'styles/variant.css'>
        <link rel = 'icon' href = '2.jpg'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Работник тех. поддержки</h1>
        <?php
        require 'header.php';
        ?>
        <p>Хотите помогать людям? Работайте у нас в службе тех. поддержи и помогайте пользователям и нам</p>
        <h2>Задачи</h2>
        <ul>
            <li>Отвечать на сообщения пользователей</li>
            <li>Анализировать отзывы</li>
            <li>Помогать пользователям с использованием платформы</li>
            <li>Обрабатывать жалобы на аккаунты, блокировать при необходимости</li>
        </ul>
        <h2>Требования</h2>
        <ul>
            <li>Аналитический склад ума</li>
            <li>Умение вежливо общаться</li>
            <li>Знание принципов работы платформы</li>
            <li>Знание работы технической стороны сайта</li>
        </ul>
        <h2>Будет плюсом</h2>
        <ul>
            <li>Умение программировать. В частности на Python, JavaScript, HTML, CSS, PHP</li>
            <li>Умение работать с базами данных (MySQL или SQLite3)</li>
        </ul>
        <form action = 'navigation.php' method = 'POST' id = 'another_form'>
            <button name = 'action' value = 'back.php' id = 'another_button'>Откликнуться</button>
        </form>
        <?php
        require 'footer.php';
        ?>
    </body>
</html>