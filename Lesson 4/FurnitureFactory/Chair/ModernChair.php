<?php

class ModernChair implements Chair
{

    public function getDescription(): string
    {
        return "Стул в стиле Модерн: ножки ". $this->getLegsMaterial() . ", сиденье ".$this->getSeatMaterial();
    }

    public function getLegsMaterial(): string
    {
        return "Металл";
    }

    public function getSeatMaterial(): string
    {
        return "Мягкая обивка";
    }
}