<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестовое задание</title>
    <link href="css/test.css" rel="stylesheet">
</head>
<body>

<?php
    $text = "";
    $code = $_GET['code'];
    switch($code){
        case 1:
            $text = "Логин уже занят";
            break;
        case 2:
            $text = "Новый пользователь успешно создан!";
            break;
        case 3:
            $text = "Ошибка создания пользователя!";
            break;
        case 4:
            $text = "Не указан логин и/или пароль!";
            break;
        case 5:
            $text = "Ошибка авторизации. Повторите ввод!";
            break;
        case 6:
            $text = "Пользователь не существует. Пройдите регистрацию!";
            break;
    }
?>
    <div id="info">
        <h3><?php echo $text ?></h3>
    </div>
    <form action="auth.php" method="POST">
        <table>
            <tr>
                <td>Логин</td><td><input type="text" name="login" id="login" value="" /></td>
            </tr>
            <tr>
                <td>Пароль</td><td><input type="password" name="pass" id="pass" value="" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Войти" /></td>
            </tr>
        </table>
    </form>
</body>
</html>