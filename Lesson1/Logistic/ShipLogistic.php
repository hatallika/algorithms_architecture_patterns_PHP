<?php

class ShipLogistic extends Logistic
{

    protected function createTransport(): Transport
    {
        echo "Доставка по морю" . PHP_EOL;
        return new Ship();
    }

    protected function createCostCalculation(): CostCalculation
    {
        return new ShipCalculation();
    }

    protected function createDocumentationReport(): DocumentationReport
    {
        return new ShipReport();
    }
}

