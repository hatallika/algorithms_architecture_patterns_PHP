<?php

class ShipLogistic extends Logistic
{

    protected function createTransport(): Transport
    {
        echo "Доставка по морю" . PHP_EOL;
        return new Ship();
    }
}
