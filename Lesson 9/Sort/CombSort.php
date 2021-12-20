<?php
//расческа
function combSort($arr){
    $iter = 0;
    $gap = count($arr);
    $swap = true;
    while($gap > 1 || $swap){
        $iter++;
        if($gap > 1) $gap /= 1.25;
        $swap = false;
        $i = 0;
        while($i + $gap < count($arr)){
            $iter++;
            if($arr[$i] > $arr[$i + $gap]){
                list($arr[$i], $arr[$i + $gap]) = array($arr[$i + $gap], $arr[$i]);
                $swap = true;
            }
            ++$i;
        }
    }
    echo "Количество итераций Расческой: $iter" . PHP_EOL;
    return $arr;
}