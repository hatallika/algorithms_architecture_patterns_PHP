<?php

class VictorianCoffeeTable implements CoffeeTable
{

    public function getDescription(): string
    {
        return "Стол в викторианском стиле: ножки ". $this->getLegsMaterial() .
            ", столешница ".$this->getShapeTableTop();
    }

    public function getLegsMaterial(): string
    {
        return "Красное дерево";
    }

    public function getShapeTableTop(): string
    {
        return "Прямоугольная";
    }
}