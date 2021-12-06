<?php

class HeadHunter
{
 public array $applicants;
 public Vacancy $vacancy;

 public function subscribe(Observer $applicant){
     echo "{$applicant->getName()} подписался на рассылку биржи HH" . PHP_EOL;
     $this->applicants[] = $applicant;
 }

 public function unsubscribe(Observer $applicant) {

     foreach ($this->applicants as $key => $obsrv){

         if($applicant->getEmail() === $obsrv->getEmail()){
             unset($this->applicants[$key]); //просто unset($obsrv) здесь не работает.
             echo "{$applicant->getName()} отписался от рассылки биржи HH" . PHP_EOL;
         }
     }

 }

 public function post(Vacancy $vacancy)
 {
    echo "HH: Появилась новая вакансия." . PHP_EOL;
    $this->vacancy = $vacancy;

    echo "HH: Запускаю рассылку о новой вакансии: {$this->vacancy->getName()}" . PHP_EOL;
    $this->notify();
 }

    public function notify()
    {
        foreach ($this->applicants as $applicant) {
            $applicant->receive($this->vacancy);
        }
    }


}