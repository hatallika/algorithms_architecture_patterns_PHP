<?php
include "Sort/HeapSplSort.php";
include "Sort/randArray.php";
include "Search/InterpolationSearch.php";

function getArr(int $n): array
{
    return _randArray($n, 1, 50);
}
$num = 15;
$arr = getArr(20);
//$arr = [10,3,2,15,15,15,15,16,20,4,2,1,3];

function searchDelete($arr, $num){
    //Вариант 1: будем искать число каждый раз методом интерполяции и удалять пока они не кончатся.

    echo "Сортировка пирамидальная SPL: ";
    $sortArr = treeSort($arr);
    print_r($sortArr);
    //так как поиск методом интерполяции, будем запускать метод повторно пока все искомые значения не будут удалены.
    do {
        echo "Ищем число..." . PHP_EOL;
        $ind = interpolationSearch($sortArr,$num);
        if(!is_null($ind)){
            echo "Удаляем число {$sortArr[$ind]}  с индексом {$ind} из массива". PHP_EOL;
            unset($sortArr[$ind]);
            //индексируем
            //$sortArr = array_values($sortArr);
            array_splice($sortArr, $ind, 0);

        };
    }
    while(!is_null($ind));
    echo "Результат" . PHP_EOL;
    print_r($sortArr);

}



function searchDelete2($arr, $num){
    //Вариант 2: Ищем число один раз интерполяцией, и проверяем соседние слева и справа.
    echo "Сортировка пирамидальная SPL: ";
    $sortArr = treeSort($arr);
    print_r($sortArr);
    echo "Ищем число" . PHP_EOL;
    $ind = interpolationSearch($sortArr,$num);

    //удаляем найденное число, проверяем на повторы соседнее, вставшее на его место: по индексу и значению.
    while($sortArr[$ind]==$num){
        echo "Удаляем число {$sortArr[$ind]}  с индексом {$ind} из массива". PHP_EOL;
        unset($sortArr[$ind]);
        //индексируем
        //$sortArr = array_values($sortArr);
        array_splice($sortArr, $ind, 0);
    };
    //проверяем соседние слева
    while($sortArr[$ind-1]===$num){
        unset($sortArr[$ind-1]);
        array_splice($sortArr, $ind, 0);
    }

    echo "Результат" . PHP_EOL;
    print_r($sortArr);

}
$start = microtime(true);
searchDelete($arr, $num);
echo "Удаление с повторением поиска интерполяции: ".( microtime(true) - $start).PHP_EOL;
//0.0051798820495605
$start = microtime(true);
searchDelete2($arr, $num);
echo "Удаление с поиском 1 раз и проверкой соседних значений ".( microtime(true) - $start).PHP_EOL;
//второй способ ищет быстрее если несколько искомых значений.




