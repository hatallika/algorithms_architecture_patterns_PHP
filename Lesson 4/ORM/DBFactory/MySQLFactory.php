<?php

class MySQLFactory implements DBFactory
{

    public function dbConection()
    {
        return new MySqlConection();
    }

    public function dbRecord()
    {
        return new MySqlRecord();
    }

    public function dbQueryBuilder()
    {
        return new MySqlQueryBuilder();
    }
}