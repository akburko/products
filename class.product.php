<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 3/12/16
 * Time: 7:32 AM
 */
class Product
{
    public $id = null;
    private $db = null;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->db = DB::getConnection();
    }

    /**
     * Получение списка всех продуктов
     *
     * @return bool
     */
    public function getProducts() {

        return true;
    }


}