<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 3/9/16
 * Time: 6:56 PM
 */
    $mas = [1,2,3,4,5,6,7,8,9,10,11];

    $n = count($mas); // Количество элементов массива
    $col = 4; // Требуемое количество колонок
    $row = intval($n / $col); // Расчетное количество строк

    if (($row*$col) < $n) {
        $row += 1; // Уточнение количества строк
    }

    $k = -1;

    foreach($mas as $i => $v) {

        if (($i % $row) == 0) {
            $k++;
        }

        $ar_table[$i % $row][$k] = $v;

    }

    print_r($ar_table);