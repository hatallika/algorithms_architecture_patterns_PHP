<?php

interface FurnitureFactory
{
    public function createChair(): Chair;
    public function createCoffeeTable(): CoffeeTable;
    public function createSofa(): Sofa;
}