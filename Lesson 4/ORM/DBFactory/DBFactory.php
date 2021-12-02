<?php

interface DBFactory
{
    public function dbConection();
    public function dbRecord();
    public function dbQueryBuilder();
}