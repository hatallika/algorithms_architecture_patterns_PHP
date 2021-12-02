<?php

class ModernCoffeeTable implements CoffeeTable
{

    public function getDescription(): string
    {
        return "Стол в стиле Модерн: ножки ". $this->getLegsMaterial() .
            ", столешница ".$this->getShapeTableTop();
    }

    public function getLegsMaterial(): string
    {
        return "Дерево";
    }

    public function getShapeTableTop(): string
    {
        return "Овальная";
    }
}