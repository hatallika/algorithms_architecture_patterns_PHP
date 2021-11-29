<?php

class AirLogistic extends Logistic
{
    protected function createTransport(): Transport {

        echo "Авиадоставка" . PHP_EOL;
        return new Plane();
    }

    protected function createCostCalculation(): CostCalculation
    {
        return new AirCalculation();
    }


    protected function createDocumentationReport(): DocumentationReport
    {
        return new AirReport();
    }
}