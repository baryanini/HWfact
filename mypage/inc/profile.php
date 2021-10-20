<form class="screen profile_screen" method="post">
    <input type="submit" value="Выйти" name="quit">
    <div>
        <?
        echo $_SESSION['login'];
        if($_SESSION['choice']){
            echo ' Ты нажимал на '.$_SESSION['choice'];
        }
        ?>

    </div>
    <div>
        <button name="choice" value="red"><img src="img/red.png" height="70"></button>
        <button name="choice" value="blue"><img src="img/blue.png" height="70"></button>

    </div>
</form>