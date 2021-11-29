<?php

class RoadLogistic extends Logistic
{
    protected function createTransport(): Transport {

        echo "Доставка по дороге" . PHP_EOL;
        return new Car();
    }

    protected function createCostCalculation(): CostCalculation
    {
        return new RoadCalculation();
    }


    protected function createDocumentationReport(): DocumentationReport
    {
        return new RoadReport();
    }
}