<!DOCTYPE html>
<html>
    <head>
        <title>Вакансии</title>
        <meta charset = 'utf-8'>
        <meta name = 'autor' content ='Sema1903'>
        <link rel = 'stylesheet' href = 'styles/variants.css'>
        <link rel = 'icon' href = '2.jpg'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Вакансии</h1>
        <?php
        require 'header.php';
        ?>
        <form action = 'navigation.php' method = 'POST' id = 'another_form'>
            <button id = 'another_button' name = 'action' value = 'designer.php'>
                <h2>Веб-дизайнер</h2>
                <p>Занимается созданием графического интерфейса сайта</p>
            </button>
            <button id = 'another_button' name = 'action' value = 'artist.php'>
                <h2>Художник</h2>
                <p>Занимается созданием всех изображений, необходимых для работы платформы</p>
            </button>
            <button id = 'another_button' name = 'action' value = 'market.php'>
                <h2>Маркетолог</h2>
                <p>Занимается продвижением сайта, ведением сообществ в соц. сетях и официальном аккаунте Друзья 2.0</p>
            </button>
            <button id = 'another_button' name = 'action' value = 'tech_support.php'>
                <h2>Работник тех. поддержки</h2>
                <p>Отвечает на вопросы пользователей, помогает им разбираться с плафтормой</p>
            </button>
        </form>
        <?php
        require 'footer.php';
        ?>
    </body>
</html>