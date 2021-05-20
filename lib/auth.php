<?
    include_once($_SERVER['DOCUMENT_ROOT'] . '/components/db_connect.php');
    $login = $_POST['login'];
    $password = $_POST['password'];
    $res = $conn->query("SELECT COUNT(*) FROM `user` WHERE `login` = '$login' AND `password` = '$password'")->fetch_assoc()['COUNT(*)'];
    if($res == 1){
        $res = $conn->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'")->fetch_assoc();
        setcookie('login', $login, time() + 3600*24*7, '/');
        setcookie('access', $res['access'], time() + 3600*24*7, '/');
        header('Location: /');
    }
    else{
        print('<p>Неверный логин или пароль! <a href="'.$_SERVER['HTTP_REFERER'].'">Вернуться</a></p>');
    }
?>