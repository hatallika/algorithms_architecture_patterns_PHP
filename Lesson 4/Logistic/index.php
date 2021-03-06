<?php
include "Logistic/Logistic.php";
include "Logistic/RoadLogistic.php";
include "Logistic/ShipLogistic.php";
include "Logistic/AirLogistic.php";
include "Transport/Transport.php";
include "Transport/Car.php";
include "Transport/Ship.php";
include "Transport/Plane.php";
include "CostCalculation/CostCalculation.php";
include "CostCalculation/RoadCalculation.php";
include "CostCalculation/ShipCalculation.php";
include "CostCalculation/AirCalculation.php";
include "DocumentationReport/DocumentationReport.php";
include "DocumentationReport/RoadReport.php";
include "DocumentationReport/ShipReport.php";
include "DocumentationReport/AirReport.php";


function prog(Logistic $logistic){
    //приложение которое может работать не только с логистикой
    $logistic->startDelivery();
    $logistic->calculate();
    $logistic->report_generation();

}
$logistic = new RoadLogistic();
prog($logistic);

$logistic = new ShipLogistic();
prog($logistic);

$logistic = new AirLogistic();
prog($logistic);