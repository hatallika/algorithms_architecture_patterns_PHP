<?php

use adapters\{CircleAdapter, SquareAdapter};
use library\{CircleAreaLib, SquareAreaLib};

spl_autoload_register(function ($className){
    include $className . ".php";
});


function client($sideSquare, $circumference ) {
    $squareArea = (new SquareAdapter(new SquareAreaLib()))->squareArea($sideSquare);
    echo "Площадь квадрата со стороной {$sideSquare} равна {$squareArea}" . PHP_EOL;

    $circleArea = (new CircleAdapter(new CircleAreaLib()))->circleArea($circumference);
    echo "Площадь окружности с длинной окружности $circumference равна $circleArea" . PHP_EOL;
}

client(3,7);