<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 3/11/16
 * Time: 12:32 PM
 */
class DB
{

    private static $_db = null;  //экземпляр объекта

    private  function __construct() {
    }

    private function __clone() { //запрещаем клонирование объекта модификатором private
    }

    static public function getConnection()
    {
        if (self::$_db == null) { // No PDO exists yet, so make one and send it back.

            try {

                self::$_db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                self::$_db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

            } catch (PDOException $e) {
                // Use next line for debugging only, remove or comment out before going live.
                //echo 'PDO says: ' . $e->getMessage() . '<br />';

                // This is all the end user should see if the connection fails.
                die('<h1>Sorry. The Database connection is temporarily unavailable.</h1>');
            } // end PDO connection try/catch
            return self::$_db;

        } else { // There is already a PDO, so just send it back.

            return self::$_db;

        } // end PDO exists if/else

    } // end function getConnection

}