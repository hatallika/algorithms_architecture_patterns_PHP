<?php

class WebMoneyPayment implements IPayment
{

    public function toPay($orderDetails)
    {
        echo "Оплата через WebMoney" . PHP_EOL;
    }
}