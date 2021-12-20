<?php

class AirReport extends DocumentationReport

{
    public function generation(): string
    {
        echo "Формирование документации доставки по воздушному пути" . PHP_EOL;
        return "Отчет по воздушному пути" . PHP_EOL;
    }
}