<?php
session_start();
if(!($_COOKIE['color'])){                        //
    setcookie('color','#fe4b4b');
}
if(isset($_POST['color']) and $_POST['color']!='none'){
    setcookie('color',$_POST['color']);
    $_COOKIE['color']=$_POST['color'];
}


if (isset($_POST['quit'])){
    session_unset();
}
if (isset($_POST['choice']))
    $_SESSION['choice']=$_POST['choice'];


function TimeCheck(){
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