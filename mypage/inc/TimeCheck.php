<?php
session_start();
if(!($_COOKIE['color'])){ //если куки пустые то стандартный фон
    $_COOKIE['color']='#fe4b4b';
    setcookie('color','#fe4b4b');
}
if(isset($_POST['color']) and $_POST['color']!='none'){ // смена фона из формы и запись в куки
    setcookie('color',$_POST['color']);
    $_COOKIE['color']=$_POST['color'];
}


if (isset($_POST['quit'])){ //  при выходе из профиля
   unset($_SESSION['login']);
    unset($_SESSION['login']);
}
if (isset($_POST['choice'])) // запомнить выбор
    $_SESSION['choice']=$_POST['choice'];


function TimeCheck(){ //проверка
    if (!isset($_SESSION["theme"])) {
        date_default_timezone_set('GMT+5');
        if (8 < date('H') and date('H') < 20) {
            $_SESSION["theme"] = "light";
        } else {
            $_SESSION["theme"] = "dark";
        }
    }
}
TimeCheck();
?>