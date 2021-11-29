<?php

abstract class Logistic
{
    private Transport $transport;

    public function __construct()
    {
        $this->transport = $this->createTransport();
    }

    public function startDelivery()
    {
        echo "Начинаем доставку" . PHP_EOL;

        $this->transport->delivery();

        echo "Разгружаем" . PHP_EOL;
    }



    abstract protected function createTransport(): Transport;
}