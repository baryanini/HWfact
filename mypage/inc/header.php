<?
include "inc/sql.php";
?>
<header class="header section border">
    <div class="fact-logo">
        <a href="https://fact.digital/" target="_blank" title="Fact" class="link">
            <div class="fact_image"></div>
        </a>
    </div>
    <nav class="menu">
        <a href="table.php" class="link">
            <img src="img/mendeleevRed.png" class="mendeleev logo">
            <p class="nav-title">К таблице Менделеева</p>
        </a>
        <a href="flexgrid.php" class="link">
            <img src="img/flexgrid.PNG" class="flexgrid logo">
            <p class="nav-title">Флексы и Гриды</p>
        </a>
        <a href="array.php" class="link">
            <img src="img/array.PNG" class="array logo">
            <p class="nav-title">Массивы</p>
        </a>
        <a href="index.php" class="link">
            <img class="home logo" src="img/home.png">
            <p class="nav-title">Домой</p>
        </a>

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
                        header('Location: profile.php');  // перенаправление на нужную страницу
                        exit();    // прерываем работу скрипта, чтобы забыл о прошлом
                    } else
                        echo 'Неправильные данные';
                } else
                    echo 'Такого логина нет';
            } else
                echo '<p class = "liltext">ИЛИ <a class="lilhref" href="reg.php" id="changescreen">ЗАРЕГИСТРИРУЙТЕСЬ</a></p>';
            ?>
        </form>


<!--        <form class="screen reg_screen" method="post">-->
<!--            <a class="mmm">РЕГИСТРАЦИЯ</a>-->
<!--            <input required placeholder="login" class="si" type="text" name="reg_login">-->
<!--            <input required placeholder="password" class="si" type="text" name="reg_password">-->
<!--            <input type="submit" value="AAA">-->
<!--            --><?//
//            if ($_POST['reg_login']) {
//                $login = trim($_POST['reg_login']);
//                $pas = trim($_POST['reg_password']);
//                if (isset($bass[$login]))
//                    echo 'Такой логин уже есть';
//                else {
//                    $nuser = '$bass[\'' . $login . '\'] = \'' . $pas . '\';';
//                    file_put_contents('inc/sql.php', $nuser, FILE_APPEND);
//                    echo 'Успешная регистрация';
//                }
//            } else
//                echo '<p class = "liltext">ИЛИ <a class="lilhref" href="#" id="changescreen">ВОЙДИТЕ</a></p>';
//            ?>
<!--        </form>-->

    </nav>
    <div class="btn-container">
        <a class="theme-button" id="theme-button"><span>Сменить тему</span></a>
        <a class="theme-button login-button" id="theme-button2"><span>Профиль</span></a>
    </div>
    <script>
        var log_but = document.getElementById('theme-button2');
        var screen_href = document.getElementById('changescreen');
        log_but.addEventListener("click", function () { show(); });
        screen_href.addEventListener("click", function () { change(); });
        let currz = true;
        let currscreen = 'log';
        function show() {
            if (currz == true) {
                currz = false;
                document.getElementsByClassName('screen')[0].style.zIndex = '10';
            }
            else{
                currz = true;
                document.getElementsByClassName('screen')[0].style.zIndex = '-10';
            }
        }
    </script>

</header>