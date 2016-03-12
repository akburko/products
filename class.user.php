<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 3/11/16
 * Time: 6:16 PM
 */
class User
{
    private $db = null;
    public $hash = null; // Хэш пароля
    public $status = 4; // Статус по умолчанию (значения не переданы)
    public $id = null;

    /**
     * User constructor.
     *
     * @param string $login
     * @param string $pass
     */
    public function __construct($login="",$pass="") {
        $this->db = DB::getConnection();
        if ($login) {
            // Если переданы не пустые значения логина и пароля
            if ($this->isLogin($login)) {
                // Пользователь с переданным логином существует
                if ($this->checkPass($pass)) {
                    // Пользователь авторизован
                    $this->status = 7;
                } else {
                    // Неверный пароль
                    $this->status = 5;
                }
            } else {
                // Пользователь с переданным логином не существует
                $this->status = 6;
            }
        }
    }

    /**
     * @param $login
     * @param $pass
     * @return bool
     */
    public function Register($login, $pass) {
        $sql = "INSERT INTO users (login,password) VALUES(:login,:pass)";
        $result = $this->db->prepare($sql);
        $result->execute(["login"=>$login,"pass"=>password_hash($pass, PASSWORD_DEFAULT)]);
        return true;
    }

    /**
     * @param $login
     * @return string
     */
    public function isLogin($login) {
        $sql = "SELECT * FROM `users` WHERE `login` = :login";
        $result = $this->db->prepare($sql);
        $result->execute(["login"=>$login]);
        $result->setFetchMode(PDO::FETCH_OBJ);
        $row_count = $result->rowCount();
        if ($row_count) {
            $row = $result->fetch();
            $this->id = $row->id;
            $this->hash = $row->password;
        }
        return $row_count;
    }

    /**
     * @param $pass
     * @return bool
     */
    public function checkPass($pass) {
        if (password_verify($pass, $this->hash)) {
            return true;
        }
        else {
            return false;
        }
    }
}