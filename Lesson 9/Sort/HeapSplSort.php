<?php

function treeSort(array $list): array
{
    $iter =  0;
    $tree = new SplMinHeap();
    foreach ($list as $n) {
        $iter++;
        $tree->insert($n);
    }
    $list = [];
    while ($tree->valid()) {
        $iter++;
        $list[] = $tree->top();
        $tree->next();
    }
    echo "Количество итераций SPL Search ( кроме SPL функций): $iter" . PHP_EOL;
    return $list;
}