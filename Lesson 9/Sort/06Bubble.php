<?php

$array = [111, 5, 6, 8, 2, 2, 0, 3, 4, 9, 7];

function bubbleSort($array){
    $iter = 0;
    for($i=0; $i<count($array); $i++){
        $iter++;
        $count = count($array);
        for($j=$i+1; $j<$count; $j++){
            $iter++;
            if($array[$i]>$array[$j]){
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    echo "Количество итераций Пузырьком: $iter".PHP_EOL;
    return $array;
}

function bubbleSortList($array){

    for($i=0; $i<count($array); $i++){
        $count = count($array);
        for($j=$i+1; $j<$count; $j++){
            if($array[$i]>$array[$j]){

                list($array[$i], $array[$j]) = array($array[$j], $array[$i]);
            }
        }
    }
    return $array;
}

//list($array[$i], $array[$i + 1]) = array($array[$i + 1], $array[$i]);

function bubbleSortBit($array){

    for($i=0; $i<count($array); $i++){
        $count = count($array);
        for($j=$i+1; $j<$count; $j++){
            if($array[$i]>$array[$j]){

                $array[$j]^=$array[$i]^=$array[$j]^=$array[$i];

//                $array[$j] = $array[$i]^$array[$j];
//                $array[$i] ^= $array[$j];
//                $array[$j] ^= $array[$i];
            }
        }
    }
    return $array;
}
