<?php

namespace adapters;

use interfaces\ISquare;
use library\SquareAreaLib;

class SquareAdapter implements ISquare
{
    private $squareAreaLib;
    public function __construct(SquareAreaLib $squareAreaLib)
    {
        $this->squareAreaLib = $squareAreaLib;
    }

    public function squareArea(int $sideSquare)
    {

        $diagonal = sqrt(2 ) * $sideSquare;

        //так как библиотека принимает только целые числа уменьшим погрешность при округлении до целого
        // умножив диагональ на 100 и поделив ответ библиотеки (площадь) на 100 в квадрате.
        $area = ($this->squareAreaLib->getSquareArea($diagonal*100))/10000;
        return ceil($area); //
    }
}