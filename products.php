<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 3/11/16
 * Time: 10:20 PM
 */
require 'class.db.php';
require 'class.product.php';

// константы для подключени к БД
define('DB_HOST', 'localhost'); //сервер
define('DB_USER', 'root'); //пользователь
define('DB_PASS', ''); //пароль
define('DB_NAME', 'catalog');//база

$product = new Product();
$products = $product->getProducts(); //  Получение списка всех продуктов с рейтингом и комментариями

echo "Страница списка продуктов";

//