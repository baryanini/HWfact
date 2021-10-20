<form class="screen login_screen" method="post">
    <a class="mmm">ВХОД</a>
    <input required placeholder="login" class="si weight" type="text" name="login">
    <input required placeholder="password" class="si weight" type="text" name="password">
    <input type="submit" class="weight" value="Войти">
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
        echo '<p class = "liltext">ИЛИ <a class="lilhref" href="reg.php" id="changescreen">ЗАРЕГИСТРИРУЙТЕСЬ</a></p>';
    ?>
</form>
