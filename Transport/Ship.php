<?php

class Ship extends Transport
{
    public function delivery()
    {
        echo "Грузим" . PHP_EOL;
        echo "Плывем по морю" . PHP_EOL;
    }

}