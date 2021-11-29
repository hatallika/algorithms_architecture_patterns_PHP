<?php

class ShipCalculation extends CostCalculation
{

    public function calculation(): int
    {
        echo "Расчет стоимости доставки по воде";
        return 40000;
    }
}