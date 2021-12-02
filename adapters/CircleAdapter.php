<?php

namespace adapters;

use interfaces\ICircle;
use library\CircleAreaLib;

class CircleAdapter implements ICircle
{
    private $circleAreaLib;

    public function __construct(CircleAreaLib $circleAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    public function circleArea(int $circumference)
    {
        $diagonal = $circumference/pi();
        $area = $this->circleAreaLib->getCircleArea($diagonal*100)/10000;

        return ceil($area);
    }
}