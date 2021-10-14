<?php
session_start();

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