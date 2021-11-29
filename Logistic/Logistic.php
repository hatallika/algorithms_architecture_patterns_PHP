<?php

abstract class Logistic
{
    private Transport $transport;
    private CostCalculation $cost;

    public function __construct()
    {
        $this->transport = $this->createTransport();
        $this->cost = $this->createCostCalculation();
    }

    public function startDelivery()
    {
        echo "Начинаем доставку" . PHP_EOL;

        $this->transport->delivery();

        echo "Разгружаем" . PHP_EOL;
    }

    public function calculate()
    {
        echo "Начинаем расчет стоимости" . PHP_EOL;
        $this->cost->calculation();
    }

    abstract protected function createTransport(): Transport;
    abstract protected function createCostCalculation(): CostCalculation;
}