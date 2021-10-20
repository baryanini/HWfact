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

        <?
        if (isset($_SESSION['login'])){
            include_once "inc/profile.php";
        }else{
            include_once "inc/loginscreen.php";
        }
        ?>



    </nav>
    <div class="btn-container">
        <a class="theme-button" id="theme-button"><span>Сменить тему</span></a>
        <a class="theme-button login-button" id="theme-button2"><span>Профиль</span></a>
    </div>
    <div>
        <form method="post">
            <select name="color">
                <option value="#fe4b4b">Стандарт</option>
                <option value="blue">Синий</option>
                <option value="black">Чёрный</option>
            </select>
            <input type="submit" value="Поменять">
        </form>
    </div>
    <script>
        var log_but = document.getElementById('theme-button2');
        log_but.addEventListener("click", show);
        let currz = true;
        function show() {
            if (currz) {
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