<?php

class ShipReport extends DocumentationReport

{
    public function generation(): string
    {
        echo "Формирование документации по морскому пути" . PHP_EOL;
        return "Отчет по морскому пути" . PHP_EOL;
    }
}