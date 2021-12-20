<?php


function __merge(array &$list, int $start, int $end, int $separator): void
{
    global $iterMerge;

    $rightIndex = $separator;
    $rightEnd = $end;
    $left = array_slice($list, $start, $separator - $start);
    $leftIndex = 0;
    $leftEnd = count($left) - 1;
    //условно делим массив на 2 части и попарно сравниваем первые элементы разделенных частей.
    for ($i = $start; $i <= $end; $i++) {
        $iterMerge++;
        if ($leftIndex <= $leftEnd and $rightIndex <= $rightEnd) {
            if ($left[$leftIndex] <= $list[$rightIndex]) {
                $list[$i] = $left[$leftIndex];
                $leftIndex++;
            } else {
                $list[$i] = $list[$rightIndex];
                $rightIndex++;
            }
        } elseif ($rightIndex > $rightEnd) {
            $list[$i] = $left[$leftIndex];
            $leftIndex++;
        }
    }
}


function __mergeSort(array &$list, int $start, int $end): void
{
    global $iterMerge;
    $iterMerge++;
    $count = $end - $start + 1;
    //Если меньше 3 элементов, заканчиваем разделение пополам, сортируем части
    if ($count < 3) {
        if ($count == 2 and $list[$start] > $list[$end]) {
            list($list[$start], $list[$end]) = array($list[$end], $list[$start]);
        }
        return;
    }
    // делим исходный массив пополам
    $middle = (int)($start + $count / 2);
    __mergeSort($list, $start, $middle - 1); // вызов рекурсивно с сужением диапазона
    __mergeSort($list, $middle, $end);
    __merge($list, $start, $end, $middle); //для слияния передаем диапазон разрезанных значений,
    //и, в обратном порядке сортировка обрабатывает массивы отдельных частей. O(nlog(n))
}

function mergeSort(array &$list): void // вызываем сортировку слияния. Передаем массив и указываем диапазон
{
    __mergeSort($list, 0, count($list) - 1);
}


