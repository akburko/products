<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 3/11/16
 * Time: 12:25 PM
 */
error_reporting(E_ALL);
require 'class.db.php';
require 'class.user.php';

// константы для подключени к БД
define('DB_HOST', 'localhost'); //сервер
define('DB_USER', 'root'); //пользователь
define('DB_PASS', ''); //пароль
define('DB_NAME', 'catalog');//база

$login = $_POST['login'];
$pass = $_POST['pass'];

$user = new User();

// Проверка ввода логина и пароля
if (empty($login) OR empty($pass)) {
    header('Location: index.php?code=4');
    exit;
}

// Проверка на существование логина
if ($user->isLogin($login)) {
    header('Location: index.php?code=1');
    exit;
}

// Регистрация нового пользователя
if ($user->Register($login,$pass)) {
    header('Location: index.php?code=2');
    exit;
} else {
    header('Location: index.php?code=3');
    exit;
}




