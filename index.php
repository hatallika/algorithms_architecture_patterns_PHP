<?php
include "Logistic/Logistic.php";
include "Logistic/RoadLogistic.php";
include "Logistic/ShipLogistic.php";
include "Transport/Transport.php";
include "Transport/Car.php";
include "Transport/Ship.php";


function prog(Logistic $logistic){
    //приложение которое может работать не только с логистикой
    $logistic->startDelivery();

}
$logistic = new RoadLogistic();
prog($logistic);

$logistic = new ShipLogistic();
prog($logistic);