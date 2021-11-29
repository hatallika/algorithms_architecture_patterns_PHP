<?php

class RoadCalculation extends CostCalculation
{

    public function calculation(): int
    {
        echo "Расчет стоимости доставки по суше";
        return 1000;
    }
}