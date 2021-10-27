<?php
include_once 'classes/Classes.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Алексей Барьянов</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/flexgrid.PNG" type="image/x-icon">
    <link rel="stylesheet" href="css/normilize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flexstyle.css">
    <link rel="stylesheet" type="text/css" href="css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
</head>
<body>
<?php
include_once "inc/background.php"
?>
<?php
include_once 'inc/header.php'
?>
<main class="main section border">
    <div class="horizontal">
        <div class="horizontal_block">
            <img height="180" width="150" src="img/flexes/1.png">
            <p>Капитан Америка</p>
        </div>
        <div class="horizontal_block">
            <img height="180" width="150" src="img/flexes/2.png">
            <p>Железный Человек</p>
        </div>
        <div class="horizontal_block">
            <img height="240" width="190" src="img/flexes/3.png">
            <p>Халк</p>
        </div>
        <div class="horizontal_block">
            <img height="180" width="150" src="img/flexes/4.png">
            <p>Тор</p>
        </div>
    </div>

    <div class="quadro">
        <div class="quadro_block">
            <img src="img/flexes/5.png">
            <p>Бэтмен</p>
        </div>
        <div class="quadro_block">
            <img src="img/flexes/6.png">
            <p>Супермен</p>
        </div>
        <div class="quadro_block">
            <img src="img/flexes/7.png">
            <p>Флэш</p>
        </div>
        <div class="quadro_block">
            <img src="img/flexes/8.png">
            <p>Чудо-юдо</p>
        </div>
    </div>
</main>
<?
include_once 'inc/footer.php'
?>
<script src="js/theme.js"></script>
</body>
</html>
