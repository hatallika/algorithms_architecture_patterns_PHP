<?php

class AirCalculation extends CostCalculation
{

    public function calculation(): int
    {
        echo "Расчет стоимости авиаперевозки " . PHP_EOL;
        return 75000;
    }
}