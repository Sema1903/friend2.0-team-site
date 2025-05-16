<!DOCTYPE html>
<html>
    <head>
        <title>Веб-дизайнер</title>
        <meta charset = 'utf-8'>
        <meta name = 'autor' content ='Sema1903'>
        <link rel = 'stylesheet' href = 'styles/variant.css'>
        <link rel = 'icon' href = '2.jpg'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Веб-дизайнер</h1>
        <?php
        require 'header.php';
        ?>
        <p>Если Вам интересно создавать красивые интерфейсы сайтов - Вам сюда. Веб-дизайнеру нашей команды предстоит создавать весь снешний вид клиентской части платформы.</p>
        <h2>Задачи</h2>
        <ul>
            <li>Продумывать внешний сайта</li>
            <li>Создавать макеты своих идей</li>
            <li>Анализировать отзывы пользователей по улучшению интерфейса сайта</li>
        </ul>
        <h2>Требования</h2>
        <ul>
            <li>Видение дизайна сайта</li>
            <li>Умение рисовать и создавать графические модели</li>
            <li>Умение коммуницировать и желание работать над проектом</li>
        </ul>
        <h2>Будет плюсом</h2>
        <ul>
            <li>Умение работать с редакторами интерфейсов. Например Figma</li>
            <li>Знание HTML, CSS и JavaScript</li>
        </ul>
        <form action = 'navigation.php' method = 'POST' id = 'another_form'>
            <button name = 'action' value = 'back.php' id = 'another_button'>Откликнуться</button>
        </form>
        <?php
        require 'footer.php';
        ?>
    </body>
</html>