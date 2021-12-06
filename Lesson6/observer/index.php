<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$hh = new HeadHunter();

$applicant1 = new Applicant("Виталий", 7, "vitaliy@gmail.com");
$applicant2 = new Applicant("Сергей", 3, "sergey@gmail.com");

$hh->subscribe($applicant1);
$hh->subscribe($applicant2);

$vacancy = new Vacancy("Программист PHP Middle", 5);
$hh->post($vacancy);

$hh->unsubscribe($applicant1);
$vacancy = new Vacancy("Программист PHP Junior", 2 );
$hh->post($vacancy);