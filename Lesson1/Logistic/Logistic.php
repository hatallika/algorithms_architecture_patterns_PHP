<?php

abstract class Logistic
{
    private Transport $transport;
    private CostCalculation $cost;
    private DocumentationReport $report;

    public function __construct()
    {
        $this->transport = $this->createTransport();
        $this->cost = $this->createCostCalculation();
        $this->report = $this->createDocumentationReport();
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

    public function report_generation()
    {
        echo "Формируем отчеты по документации" . PHP_EOL;
        $this->report->generation();
    }

    abstract protected function createTransport(): Transport;
    abstract protected function createCostCalculation(): CostCalculation;
    abstract protected function createDocumentationReport(): DocumentationReport;

}