<?php
session_start();
class Page
{
    public $Bhost='localhost'; //данные БД
    public $Blogin='Regina';
    public $Bpassword='1';
    public $Bname='users';


    public function DbConnect(){
        $B_con= mysqli_connect($this->Bhost,$this->Blogin,$this->Bpassword,$this->Bname) or die('соединение с базой не установлено');
        return $B_con;
    }

    public function SignIn(){// авторизация проверка пароля и логина из бд
        if ($_POST['login']) {
            $login = trim($_POST['login']);
            $pas = hash('sha256',trim($_POST['password']));
            $query_login=mysqli_query($this->DbConnect(),'SELECT login FROM users WHERE login = '.$login." AND password = '".$pas."'");
            $count = mysqli_fetch_all($query_login,MYSQLI_ASSOC);
            if ($count) {
                $_SESSION['login'] = $login;
                header('Location: index.php');
                exit();
            } else
                echo 'Неправильные данные';
        }
        echo '<p class = "liltext">ИЛИ <a href="reg.php" >ЗАРЕГИСТРИРУЙТЕСЬ</a></p>'; // тут ссылка на регистрацию
    }

    public function Registration(){// регистрация
        if ($_POST['reg_login']) {
            $login = trim($_POST['reg_login']);
            $pas = hash('sha256', trim($_POST['reg_password']));
            $query_login=mysqli_query($this->DbConnect(),'SELECT login FROM users WHERE login = '.$login);
            $count = mysqli_fetch_all($query_login,1); // в бд такой логин есть ?
            if ($count)
                echo 'Такой логин уже есть';
            else {
                $nuser = "INSERT INTO `users`(`login`, `password`) VALUES ('".$login."', '".$pas."')";
                mysqli_query($this->DbConnect(), $nuser);
                echo 'Успешная регистрация';

            }
        }
    }

    public function TimeCheck(){ //проверка времени суток, тема
        if (!isset($_SESSION["theme"])) {
            date_default_timezone_set('GMT+5');
            if (8 < date('H') and date('H') < 20) {
                $_SESSION["theme"] = "light";
            } else {
                $_SESSION["theme"] = "dark";
            }
        }
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
            unset($_SESSION['choice']);
        }
        if (isset($_POST['choice'])) // запомнить выбор
            $_SESSION['choice']=$_POST['choice'];

    }
}
$my_page=new Page();
$my_page->TimeCheck();
