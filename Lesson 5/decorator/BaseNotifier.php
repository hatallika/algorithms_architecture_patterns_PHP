<?php

class BaseNotifier implements INotifier
{

    public function send($message)
    {
        echo "Текст рассылки: " . $message . PHP_EOL;
    }
}