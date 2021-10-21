<form class="screen profile_screen" method="post">
    <input class="profile_exit_button" type="submit" value="Выйти" name="quit">
    <a class="comment-link" href="comment.php">Оставить коммент</a>
    <div>
        <?
        echo '<span class="consequence_text">' . $_SESSION['login'] . '</span>';
        if ($_SESSION['choice']) {
            echo ' <span class="consequence_text">Ты выбирал ' . $_SESSION['choice'] . '</span>';
        }
        ?>

    </div>
    <div class="pills">
        <button onclick="javascript:window.open('prematrix.php')" class="choice_button" name="choice" value="красную">
            <img src="img/red.png" height="70">
        </button>

        <button onclick="javascript:window.open('https://thechoiceisyours.whatisthematrix.com/ru/')"  class="choice_button" name="choice" value="синюю">
            <img src="img/blue.png" height="70">
        </button>

    </div>
</form>