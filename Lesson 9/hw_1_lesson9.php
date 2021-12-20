<?php
include "Sort/HeapSplSort.php";
include "Sort/Heapsort.php";
include "Sort/randArray.php";
include "Sort/MergeSort.php";
include "Sort/06Bubble.php";

function getArr(int $n): array
{
    return _randArray($n);
}

// Тест пузырьковой сортировки при разной замене переменных: Промежуточным значением, List, XOR
$shareArr = getArr(5000);

// Замена промежуточное значение $temp
$arr = $shareArr;
$start = microtime(true);
$sort = bubbleSort($arr);
echo "Сортировка пузырьком промежуточное значение: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пузырьком temp: 17.959753036499

// Замена list
$arr = $shareArr;
$start = microtime(true);
$sort = bubbleSortList($arr);
echo "Сортировка пузырьком Замена: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пузырьком list: 17.175495147705

// Меняем местами битовой операцией XOR
$arr = $shareArr;
$start = microtime(true);
$sort = bubbleSortBit($arr);
echo "Сортировка пузырьком Битовая операция: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пузырьком битовая: 13.467735052109
//Самый быстрый обмен значениями.
//---------------------------------------------------------------------------------

//Другие сортировки на больших значениях.
$shareArr = getArr(10000);
$lastIndex = count($shareArr) - 1;

//Пирамидальная SPL
$arr = $shareArr; //
$start = microtime(true);
treeSort($arr);
echo "Сортировка пирамидальная SPL: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пирамидальная SPL: 0.38289499282837

//Сортировка пирамидальная:
$arr = $shareArr;
$start = microtime(true);
heapSort($arr);
echo "Сортировка пирамидальная: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пирамидальная: 3.9863469600677

//Сортировка пирамидальная битовая замена:
$arr = $shareArr;
$start = microtime(true);
heapSort2($arr);
echo "Сортировка пирамидальная битовый обмен: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пирамидальная: 3.5833058357239
//немного быстрее с заменой битовой операцией.

//Сортировка слиянием:
$arr = $shareArr;
$start = microtime(true);
mergeSort($arr);
echo "Сортировка слиянием: ".( microtime(true) - $start).PHP_EOL;
//Сортировка слиянием: 6.575973033905 выигрывает только до 1000 значений, а далее увеличивается

//На 1000000 значений
//Сортировка пирамидальная SPL: 4.1970541477203
//Сортировка пирамидальная: 47.012164115906
//Сортировка пирамидальная битовый обмен: 43.617764949799







