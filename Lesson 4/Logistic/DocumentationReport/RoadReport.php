<?php

class RoadReport extends DocumentationReport
{

    public function generation(): string
    {
        echo "Формирование документации по дорожному пути" . PHP_EOL;
        return "Отчет по дорожному пути" . PHP_EOL;
    }
}