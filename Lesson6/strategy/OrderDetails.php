<?php

class OrderDetails
{
    protected $totalPrice;
    protected $phone;

    public function __construct($totalPrice, $phone)
    {
        $this->totalPrice = $totalPrice;
        $this->phone = $phone;
    }


}