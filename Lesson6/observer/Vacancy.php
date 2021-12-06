<?php

class Vacancy
{
 private  String $name;
 private  Int $experience;


       public function __construct($name, $experience)
    {
        $this->name = $name;
        $this->experience = $experience;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getExperience(): int
    {
        return $this->experience;
    }



}