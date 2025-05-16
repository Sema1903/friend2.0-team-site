<!DOCTYPE html>
<html>
    <head>
        <title>Маркетолог</title>
        <meta charset = 'utf-8'>
        <meta name = 'autor' content ='Sema1903'>
        <link rel = 'stylesheet' href = 'styles/variant.css'>
        <link rel = 'icon' href = '2.jpg'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Маркетолог</h1>
        <?php
        require 'header.php';
        ?>
        <p>Любите вести социальные сети и общаться с людьми? На должности маркетолога в Друзья 2.0 у Вас будет прекрасная возможность реализовать весь свой потенциал</p>
        <h2>Задачи</h2>
        <ul>
            <li>Вести социальные сети с нашим проектом</li>
            <li>Работать с официальным аккаунтом Друзья 2.0</li>
            <li>Создавать рекламу платформы</li>
            <li>Приглашать пользователей</li>
        </ul>
        <h2>Требования</h2>
        <ul>
            <li>Умение вести каналы в соц. сетях</li>
            <li>Умение писать отзывы и текст рекламы</li>
            <li>Умение коммуницировать с людьми</li>
            <li>Желание продвигать нашу платформу</li>
        </ul>
        <form action = 'navigation.php' method = 'POST' id = 'another_form'>
            <button name = 'action' value = 'back.php' id = 'another_button'>Откликнуться</button>
        </form>
        <?php
        require 'footer.php';
        ?>
    </body>
</html>