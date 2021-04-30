<header id="header" <?($_SERVER['PHP_SELF']=='/index.php')? print('class="tv-header"'):null?> >
    <a href="/index.php" class="logo">FoxLight</a>
    <ul class="menu menu-none">
        <li class="item-menu"><a href="/index.php" class="link-menu">Телепрограмма</a></li>
        <li class="item-menu"><a href="/news/index.php" class="link-menu">Новости</a></li>
        <li class="item-menu"><a href="/contacts/index.php" class="link-menu">Контакты</a></li>
        <li class="item-menu"><a href="#" class="link-menu" id="enter">Вход</a></li>
    </ul>
    <div id="burger"><i class="fas fa-bars"></i></div>
    <div class="popup none" id="overlay">
        <form action="" method="post">
            <div class="btn-close" id="popup-close"><i class="fas fa-times"></i></div>
            <h2>Вход</h2>
            <input type="text" name="" id="" placeholder="loginoff">
            <input type="password" name="" id="" placeholder="********">
            <input type="submit" value="Войти">
            <a href=".reg.php">Создать аккаунт</a>
        </form>
    </div>
</header>
<?
    // print_r($_SERVER['PHP_SELF']);
?>