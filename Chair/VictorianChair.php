<?php

class VictorianChair implements Chair
{

    public function getDescription(): string
    {
        return "Стул в Викторианском стиле: ножки ". $this->getLegsMaterial() . ", сиденье ".$this->getSeatMaterial();
    }

    public function getLegsMaterial(): string
    {
        return "Красное дерево";
    }

    public function getSeatMaterial(): string
    {
        return "Мягкая обивка";
    }
}