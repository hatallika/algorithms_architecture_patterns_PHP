<?php

class VictorianFurnitureFactory implements FurnitureFactory
{

    public function createChair(): Chair
    {
        return new VictorianChair();
    }

    public function createCoffeeTable(): CoffeeTable
    {
        return new VictorianCoffeeTable();
    }

    public function createSofa(): Sofa
    {
        return new VictorianSofa();
    }
}