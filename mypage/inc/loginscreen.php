<form class="screen login_screen" method="post">
    <span class="mmm">ВХОД</span>
    <input required placeholder="login" class="letter" type="text" name="login">
    <input required placeholder="password" class=" letter" type="text" name="password">
    <input type="submit" class="letter" value="Войти">
    <?
    $my_page->SignIn();
    ?>
</form>
