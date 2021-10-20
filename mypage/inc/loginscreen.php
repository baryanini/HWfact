<form class="screen login_screen" method="post">
    <span class="mmm">ВХОД</span>
    <input required placeholder="login" class="letter" type="text" name="login">
    <input required placeholder="password" class=" letter" type="text" name="password">
    <input type="submit" class="letter" value="Войти">
    <?
    if ($_POST['login']) {
        $login = trim($_POST['login']);
        $pas = hash('sha256',trim($_POST['password']));
        if (isset($bass[$login])) {
            if ($pas == $bass[$login]) {
                $_SESSION['login'] = $login;
                header('Location: index.php');
                exit();
            } else
                echo 'Неправильные данные';
        } else
            echo 'Такого логина нет';
    } else
        echo '<p class = "liltext">ИЛИ <a href="reg.php" >ЗАРЕГИСТРИРУЙТЕСЬ</a></p>';
    ?>
</form>
