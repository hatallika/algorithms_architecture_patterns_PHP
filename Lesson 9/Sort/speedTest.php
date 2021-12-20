<?php

include 'QuickSort.php';
include '08QuickSort.php';
include '06Bubble.php';
include 'randArray.php';
include 'Heapsort.php';
include 'insertSort.php';
include 'PigeonholeSort.php';
include 'MergeSort.php';
include 'InsertSortSPL.php';
include 'HeapSplSort.php';
include 'DualSelectSort.php';
include 'CombSort.php';

function getArr(): array
{
	return _randArray(500);
}

$arr = getArr();
$lastIndex = count($arr) - 1;

// Пузырьком
$start = microtime(true);
bubbleSort($arr);
echo "Сортировка пузырьком: ".( microtime(true) - $start).PHP_EOL;

// Вставками
$iterInsert = 0;
$arr = getArr();
$start = microtime(true);
insertion_sort($arr);
echo "Сортировка вставками: ".( microtime(true) - $start).PHP_EOL;
echo "Количество итераций: $iterInsert" . PHP_EOL;

//Расческой
$arr = getArr();
$start = microtime(true);
combSort($arr);
echo "Сортировка расческой: ".( microtime(true) - $start).PHP_EOL;
//Количество итераций: подсчет внутри функции

//$start = microtime(true);
//insertion_sort($arr);
//echo "Сортировка вставками сорт. массива: ".( microtime(true) - $start).PHP_EOL;

// Слиянием
$iterMerge = 0;
$arr = getArr();
$start = microtime(true);
mergeSort($arr);
echo "Сортировка слиянием: ".( microtime(true) - $start).PHP_EOL;
echo "Количество итераций: $iterMerge" . PHP_EOL;

//Пирамидальная
$iterHeap = 0;
$arr = getArr();
$start = microtime(true);
heapSort($arr);
echo "Сортировка пирамидальная: ".( microtime(true) - $start).PHP_EOL;
echo "Количество итераций: $iterHeap" . PHP_EOL;

$arr = getArr();
$start = microtime(true);
treeSort($arr);
echo "Сортировка пирамидальная SPL: ".( microtime(true) - $start).PHP_EOL;
//Количество итераций: подсчет внутри функции

//Быстрая сортировка
$quick_iter = 0;
$arr = getArr();
$start = microtime(true);
quickSortLesson($arr);
echo "Сортировка быстрая наша: ".( microtime(true) - $start).PHP_EOL;
echo "Количество итераций: $quick_iter" . PHP_EOL;

//Быстрая сортировка чужая
$quick_iter = 0;
$arr = getArr();
$start = microtime(true);
quickSort($arr, 0, $lastIndex);
echo "Сортировка быстрая чужая: ".( microtime(true) - $start) . PHP_EOL;
echo "Количество итераций: $quick_iter" . PHP_EOL;

//Сортировка PHP sort();
$arr = getArr();
$start = microtime(true);
sort($arr);
echo "Сортировка из PHP: ".( microtime(true) - $start).PHP_EOL;

//Выбором
$iterDualSelect = 0;
$arr = getArr();
$start = microtime(true);
dualSelectSort($arr);
echo "Сортировка выбором: ".( microtime(true) - $start).PHP_EOL;
echo "Количество итераций Выбором: $iterDualSelect" . PHP_EOL;


//Голубиная
$pigeonSort = 0;
$arr = getArr();
$start = microtime(true);
pigeonholeSort($arr);
echo "Сортировка голубиная: ".( microtime(true) - $start).PHP_EOL;
echo "Количество итераций голубинная сортировка : $pigeonSort" . PHP_EOL;