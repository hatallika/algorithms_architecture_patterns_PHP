<?php

function quickSort(array &$arr, $low, $high) {
    global $quick_iter;
    $i = $low;
    $j = $high;
    $middle = $arr[ ( $low + $high ) / 2 ];   // middle – опорный элемент; в нашей реализации он находится посередине между low и high
    do {
        $quick_iter++;
        while($arr[$i] < $middle) {
            ++$i;
            $quick_iter++;
        }   // Ищем элементы для правой части
        while($arr[$j] > $middle) {
            --$j;     // Ищем элементы для левой части
            $quick_iter++;
        }
            if($i <= $j){
// Перебрасываем элементы
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
// Следующая итерация
                $i++; $j--;
            }
        }
    while($i < $j);

    if($low < $j){
// Рекурсивно вызываем сортировку для левой части
        quickSort($arr, $low, $j);
    }

    if($i < $high){
// Рекурсивно вызываем сортировку для правой части
        quickSort($arr, $i, $high);
    }

}



