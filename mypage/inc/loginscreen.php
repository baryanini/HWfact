<form class="screen login_screen" method="post">
    <span class="mmm">ВХОД</span>
    <input required placeholder="login" class="letter" type="text" name="login">
    <input required placeholder="password" class=" letter" type="text" name="password">
    <input type="submit" class="letter" value="Войти">
    <?
    if ($_POST['login']) { // авторизация
        $login = trim($_POST['login']);
        $pas = hash('sha256',trim($_POST['password']));
        $query_login=mysqli_query($db_con,'SELECT login FROM users WHERE login = '.$login." AND password = '".$pas."'");
        $count = mysqli_fetch_all($query_login,MYSQLI_ASSOC);
        if ($count) {
                $_SESSION['login'] = $login;
                header('Location: index.php');
                exit();
            } else
                echo 'Неправильные данные';
    }
    echo '<p class = "liltext">ИЛИ <a href="reg.php" >ЗАРЕГИСТРИРУЙТЕСЬ</a></p>'; // тут ссылка на регистрацию
    ?>
</form>
