<?php

class Applicant implements Observer
{
    private $name;
    private $experience;
    private $email;


    public function getName()
    {
        return $this->name;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function __construct($name, $experience, $email)
    {
        $this->name = $name;
        $this->experience = $experience;
        $this->email = $email;
    }


    public function receive(Vacancy $vacancy)
    {
        if ($this->experience >= $vacancy->getExperience())
        {
            echo "{$this->name} получил уведомление о новой вакансии {$vacancy->getName()} на почту $this->email" . PHP_EOL;
        }
    }
}