<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 3/9/16
 * Time: 6:56 PM
 */
$mas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

$n = count($mas); // Количество элементов массива
$col = 3; // Требуемое количество колонок
$row = intval($n / $col); // Расчетное количество строк

if (($row * $col) < $n) {
    $row += 1; // Уточнение количества строк
}

for ( $i = 0; $i < $row; $i++ ) {
    $ar_row = array();
    for ( $j = 0; $j < $col; $j++ ) {
        if (($i + $j * $row) < $n) {
            $ar_row[] = $mas[$i + $j * $row]; // формирование строки
        }
    }
    $ar_table[] = $ar_row; // Формирование таблицы
}

print_r($ar_table);