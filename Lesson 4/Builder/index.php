<?php

require 'parts/Wheel.php';
require 'parts/Seat.php';
require 'parts/Frame.php';

require 'Bike.php';
require 'BikeBuilder.php';



function testBuilder(Wheel $wheel, Seat $seat, Frame $frame) {


    $bikeBuilder = new BikeBuilder();
    $bikeBuilder->setFrame($frame);
    $bikeBuilder->setSeat($seat);
    $bikeBuilder->setWheel($wheel);

    $bike = $bikeBuilder->build();
    $bike = $bikeBuilder->build();
    $bike = $bikeBuilder->build();

}