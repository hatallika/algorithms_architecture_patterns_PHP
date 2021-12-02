<?php

class ModernFurnitureFactory implements FurnitureFactory
{

    public function createChair(): Chair
    {
        return new ModernChair();
    }

    public function createCoffeeTable(): CoffeeTable
    {
        return new ModernCoffeeTable();
    }

    public function createSofa(): Sofa
    {
        return new ModernSofa();
    }
}