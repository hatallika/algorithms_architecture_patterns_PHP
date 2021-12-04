<?php

abstract class Decorator implements INotifier
{
    protected INotifier $objNotifier;

    public function __construct(INotifier $objNotifier)
    {
        $this->objNotifier = $objNotifier;
    }

    public function send($message)
    {
        $this->isTypeNotifier();
        $this->objNotifier->send($message);
    }

    abstract public function isTypeNotifier();
}
