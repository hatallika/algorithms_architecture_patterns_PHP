<?php

class ShipCalculation extends CostCalculation
{

    public function calculation(): int
    {
        echo "Расчет стоимости доставки по воде" . PHP_EOL;
        return 40000;
    }
}