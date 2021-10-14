<?php
include_once "inc/TimeCheck.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица Менделеева</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/mendeleevRed.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normilize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    <link rel="stylesheet" href="css/tablestyle.css">

</head>
<body>
<?
include_once "inc/background.html"
?>
<?php
include_once 'inc/header.php'
?>
<main class="main section border">
    <table class="table">
        <caption>Кусочек таблицы Менделеева</caption>
        <tr>
            <td class="pink">
                <span class="serial_number">3</span>
                <span class="weight">6.939</span>
                <span id="li" class="element_name">Li</span>
                <span class="russian_name">Литий</span>
            </td>
            <td class="pink">
                <span class="serial_number">4</span>
                <span class="weight">9,0122</span>
                <span class="element_name">Be</span>
                <span class="russian_name">Бериллий</span>
            </td>
            <td class="yellow">
                <span class="serial_number">5</span>
                <span class="weight">10.811</span>
                <span class="element_name">B</span>
                <span class="russian_name">Бор</span>
            </td>
            <td class="yellow">
                <span class="serial_number">6</span>
                <span class="weight">12.01115</span>
                <span class="element_name">C</span>
                <span class="russian_name">Углерод</span>
            </td>
        </tr>
        <tr>
            <td class="pink">
                <span class="serial_number">11</span>
                <span class="weight">22,98977</span>
                <span class="element_name">Na</span>
                <span class="russian_name">Натрий</span>
            </td>
            <td class="pink">
                <span class="serial_number">12</span>
                <span class="weight">24,305</span>
                <span class="element_name">Mg</span>
                <span class="russian_name">Магний</span>
            </td>
            <td class="yellow">
                <span class="serial_number">13</span>
                <span class="weight">26,98154</span>
                <span class="element_name">Al</span>
                <span class="russian_name">Алюминий </span>
            </td>
            <td class="yellow">
                <span class="serial_number">14</span>
                <span class="weight">28,086</span>
                <span class="element_name">Si</span>
                <span class="russian_name">Кремний</span>
            </td>
        </tr>
        <tr>
            <td class="pink">
                <span class="serial_number">19</span>
                <span class="weight">39,0983</span>
                <span class="element_name">К</span>
                <span class="russian_name">Калий</span>
            </td>
            <td class="pink">
                <span class="serial_number">20</span>
                <span class="weight">40,08</span>
                <span class="element_name">Ca</span>
                <span class="russian_name">Кальций</span>
            </td>
            <td class="blue">
                <span class="serial_number">21</span>
                <span class="weight">44,9559</span>
                <span class="element_name">Sc</span>
                <span class="russian_name">Скандий</span>
            </td>
            <td class="blue">
                <span class="serial_number">22</span>
                <span class="weight">47,9</span>
                <span class="element_name">Ti</span>
                <span class="russian_name">Титан</span>
            </td>
        </tr>
        <tr>
            <td class="blue">
                <span class="serial_number">29</span>
                <span class="weight">63,546</span>
                <span class="element_name">Cu</span>
                <span class="russian_name">Медь</span>
            </td>
            <td class="blue">
                <span class="serial_number">30</span>
                <span class="weight">65,38</span>
                <span class="element_name">Zn</span>
                <span class="russian_name">Цинк</span>
            </td>
            <td class="yellow">
                <span class="serial_number">31</span>
                <span class="weight">69,72</span>
                <span class="element_name">Ga</span>
                <span class="russian_name">Галлий</span>
            </td>
            <td class="yellow">
                <span class="serial_number">32</span>
                <span class="weight">72,59</span>
                <span class="element_name">Ge</span>
                <span class="russian_name">Германий</span>
            </td>
        </tr>
    </table>
</main>
<?
include_once 'inc/footer.php'
?>
<script src="js/theme.js"></script>
</body>
</html>
