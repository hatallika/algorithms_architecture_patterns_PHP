<?php

class SMSNotifier extends Decorator
{

    public function isTypeNotifier()
    {
        echo "Рассылка по SMS" . PHP_EOL;
    }
}