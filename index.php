<?php
include "FurnitureFactory/FurnitureFactory.php";
include "FurnitureFactory/ModernFurnitureFactory.php";
include "FurnitureFactory/VictorianFurnitureFactory.php";
include "Chair/Chair.php";
include "Chair/VictorianChair.php";
include "Chair/ModernChair.php";
include "CoffeeTable/CoffeeTable.php";
include "CoffeeTable/ModernCoffeeTable.php";
include "CoffeeTable/VictorianCoffeeTable.php";
include "Sofa/Sofa.php";
include "Sofa/VictorianSofa.php";
include "Sofa/ModernSofa.php";


function clientCode(FurnitureFactory $factory)
{
    $chair = $factory->createChair();
    $coffeeTable = $factory->createCoffeeTable();
    $sofa = $factory->createSofa();

    echo $chair->getDescription() . "\n";
    echo $coffeeTable->getDescription() . "\n";
    echo $sofa->getDescription() . "\n";
}
echo "Комплект мебели в стиле модерн:\n";
clientCode(new ModernFurnitureFactory());
echo "Комплект мебели в Викторианском:\n";
clientCode(new VictorianFurnitureFactory());