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

$user = new User($login,$pass);

if ($user->status==7) {
    // Пользователь успешно авторизован
    header('Location: products.php');
    exit;
} else {
    // Пользователь не авторизован
    header('Location: index.php?code='.$user->status);
    exit;
}