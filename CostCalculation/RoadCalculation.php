<?php

class RoadCalculation extends CostCalculation
{

    public function calculation(): int
    {
        echo "Расчет стоимости доставки по суше" . PHP_EOL;
        return 1000;
    }
}