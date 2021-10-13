<?php
session_start();

if(!isset($_SESSION["theme"]))
{
    date_default_timezone_set('GMT+5');
    if (8 < date('H') and date('H') < 20) {
        $_SESSION["theme"] = "light";
    } else {
        $_SESSION["theme"] = "dark";
    }
}
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
    <link rel="shortcut icon" href="img/home.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normilize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
</head>
<body>

<?
include_once "inc/background.html"
?>
<?php
include_once 'inc/header.php'
?>
<main class="main section border">
    <div class="me"></div>
    <div class="info">
        <h1>Алексей Барьянов</h1>
        <div class="about">
            <div class="bio border">
                <p>Работаю в кофейне.</p>
                <p>Учился в МГТУ. Недоучился в МГТУ.</p>
                <ul class="bio-techs">Технологии, которые я буду знать в будущем:</ul>
                <br>
                <li class="bio-techs-item">
                    HTML,CSS
                    <progress max="100" value="40">
                        <span id="value">30</span>%
                    </progress>
                </li>
                <li class="bio-techs-item">
                    JavaScript
                    <progress max="100" value="15">
                         <span id="value">25</span>%
                    </progress>
                </li>
                <li class="bio-techs-item">
                    PHP
                    <progress max="100" value="8">
                         <span id="value">25</span>%
                    </progress>
                </li>
                <li class="bio-techs-item">
                    Python
                    <progress max="100" value="20">
                         <span id="value">25</span>%
                    </progress>
                </li>
                <li class="bio-techs-item">
                    Git
                    <progress max="100" value="30">
                         <span id="value">25</span>%
                    </progress>
                </li>
                <li class="bio-techs-item">
                    SQL
                    <progress max="100" value="10">
                         <span id="value">25</span>%
                    </progress>
                </li>
            </div>
            <div class="links border">
                <ul class="list">
                    <li class="item">
                        <a target="_blank"
                           href="https://drive.google.com/drive/folders/1-RpFgHHxywlEj99qyiHSwcF10AB8IBcc">Занятия</a>
                    </li>
                    <li class="item">
                        <a target="_blank"
                           href="https://drive.google.com/drive/folders/1xuMiY0iM7Cyxuz24rA9cor6lBG4q-l5q">Материалы</a>
                    </li>
                    <li class="item">
                        <a target="_blank" href="https://web.telegram.org/?legacy=1#/im?p=g598159099">Телеграм</a>
                    </li>
                    <li class="item">
                        <a target="_blank"
                           href="https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=34&TEST_ID=31&PAGE=1&current_fieldset=SOCSERV">1-c
                            Битрикс</a>
                    </li>
                    <li class="item">
                        <a target="_blank"
                           href="https://docs.google.com/spreadsheets/d/1oqBvO9sWVKwu09ij6d1886EjvpvsKNY0/edit?rtpof=true&sd=true">
                            Журнал</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
<div class="hw section">
    <?
    $a = file_get_contents("index.php");
    $aLen = mb_strlen($a);
    $glasnie = ['а','о','у','е','о','э','и','ю','я'];
    $noGlasLen=mb_strlen(str_replace($glasnie,'',$a));
    echo $aLen-$noGlasLen.' гласных на странице, даже с этой фразой<br>';
//    $b=str_word_count($a,1);
    $norus="\"|qwertyuiopasdfghjklzxcvbnm<>{}=QWERTYUIOPASDFGHJKLZXCVBNM1234567890/-?.,()#$[];%'_!&:+\\";
    $norus=mb_str_split($norus);
    $norus[]='аоуеоэиюя';
    $b = str_replace($norus, '',$a);
    echo($b).'<br>';
   $c = mb_str_split($b);
   for ($i=1;$i<count($c);$i++){
       if($c[$i] !== ' ' and $c[$i-1]==' '){
            unset($c[$i-1]);
       }
   }
   print_r($c);

//   $c = explode(' ',$b);
//   foreach ($c as $key=>$item){
//       $item=mb_str_split($item);
//       for($i=0; $i<count($item);$i++){
//           if($item[$i]==' ' || $item[$i]==''){
//               unset($c[$key]);
//           }
//       }
//   }
    echo '<pre>';
   print_r($b);
    echo '</pre>';
    ?>

</div>
<?
include_once 'inc/footer.php'
?>
<script src="js/theme.js"></script>
</body>
</html>
