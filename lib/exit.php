<?
    setcookie('login', '', time() - 3600*24*7, '/');
    setcookie('access', '', time() - 3600*24*7, '/');
    header('Location: /');
?>