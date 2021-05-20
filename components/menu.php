<header id="header" <?($_SERVER['PHP_SELF']=='/index.php')? print('class="tv-header"'):null?> >
    <a href="/index.php" class="logo">FoxLight</a>
    <ul class="menu menu-none">
        <li class="item-menu"><a href="/index.php" class="link-menu">Телепрограмма</a></li>
        <li class="item-menu"><a href="/news/index.php" class="link-menu">Новости</a></li>
        <li class="item-menu"><a href="/contacts/index.php" class="link-menu">Контакты</a></li>
        <? (isset($_COOKIE['access']) AND $_COOKIE['access'] == 1) ? print('<li class="item-menu"><a href="/admin/index.php" class="link-menu">Панель управления</a></li>') : print('') ?>
        <? (isset($_COOKIE['login'])) ? print('<li class="item-menu"><a href="/lib/exit.php" class="link-menu">Выход</a></li>') : print('<li class="item-menu"><a href="#" class="link-menu" id="enter">Вход</a></li>') ?>
    </ul>
    <div id="burger"><i class="fas fa-bars"></i></div>
    <div class="popup none" id="overlay">
        <form action="lib/auth.php" method="post">
            <div class="btn-close" id="popup-close"><i class="fas fa-times"></i></div>
            <h2>Вход</h2>
            <input type="text" name="login"placeholder="loginoff">
            <input type="password" name="password"placeholder="********">
            <input type="submit" value="Войти">
            <a href="/reg.php">Создать аккаунт</a>
        </form>
    </div>
</header>
<?
    // print_r($_SERVER['PHP_SELF']);
?>