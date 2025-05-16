<!DOCTYPE html>
<html>
    <head>
        <title>Художник</title>
        <meta charset = 'utf-8'>
        <meta name = 'autor' content ='Sema1903'>
        <link rel = 'stylesheet' href = 'styles/variant.css'>
        <link rel = 'icon' href = '2.jpg'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Художник</h1>
        <?php
        require 'header.php';
        ?>
        <p>Любите рисовать? Самое время применить свои умения на практитке! Присоединяйтесь к нашей команде в качесве художника и делайте социальную сеть лучше</p>
        <h2>Задачи</h2>
        <ul>
            <li>Создавать изобржаения в формате GIF для торговли NFT-подрками</li>
            <li>Создавать изображения в формате GIF для стикерпака платформы</li>
            <li>Создавать изображения для офицциального аккаунта сайта</li>
            <li>Создать персонажа-символ платформы</li>
        </ul>
        <h2>Требования</h2>
        <ul>
            <li>Умение рисовать на электронных устройствах</li>
            <li>Умение создавать изобржаения в формата GIF</li>
            <li>Инициативность и желание создавать крутые проекты</li>
        </ul>
        <form action = 'navigation.php' method = 'POST' id = 'another_form'>
            <button name = 'action' value = 'back.php' id = 'another_button'>Откликнуться</button>
        </form>
        <?php
        require 'footer.php';
        ?>
    </body>
</html>