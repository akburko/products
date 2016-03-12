<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 3/9/16
 * Time: 6:56 PM
 */
    $mas = [1,2,3,4,5,6,7,8,9,10,11];

    $n = count($mas); // Количество элементов массива
    $col = 3; // Требуемое количество колонок
    $row = intval($n / $col); // Расчетное количество строк

    if (($row*$col) < $n) {
        $row += 1; // Уточнение количества строк
    }

    $k = 0;

    for ($i = 0; $i < $col; $i++) {

        for ($j = 0; $j < $row; $j++) {
            if ($k < $n) {
                $ar_table[$j][$i] = $mas[$k]; // формирование строки
                $k++;
            }
        }

    }


    print_r($ar_table);