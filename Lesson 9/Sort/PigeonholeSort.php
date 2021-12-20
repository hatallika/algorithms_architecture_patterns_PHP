<?php

function __addDictionary(int $n, array &$dictionary): void
{
    global $pigeonSort;
    $pigeonSort++;
    if (isset($dictionary[$n])) {
        $dictionary[$n]++;
        return;
    }
    $dictionary[$n] = 1;
}


function pigeonholeSort(array $list): array
{
    global $pigeonSort;
    $pigeonSort ++;
    if (empty($list)) {
        return [];
    }
    $min = $list[0];
    $max = $list[0];
    $dictionary = [];
    foreach ($list as $n) {
        $pigeonSort++;
        if ($min > $n) {
            $min = $n;
        } elseif ($max < $n) {
            $max = $n;
        }
        __addDictionary($n, $dictionary);
    }
    $list = [];
    for ($i = $min; $i <= $max; $i++) {
        $pigeonSort++;
        if (!isset($dictionary[$i])) {
            continue;
        }
        for ($j = 0; $j < $dictionary[$i]; $j++) {
            $list[] = $i;
        }
    }

    return $list;
}
