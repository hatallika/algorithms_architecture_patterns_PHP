<?php

interface Observer
{
    public function receive(Vacancy $vacancy);
}