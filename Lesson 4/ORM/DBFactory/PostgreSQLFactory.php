<?php

class PostgreSQLFactory implements DBFactory
{

    public function dbConection()
    {
        return new PostgreSqlConection();
    }

    public function dbRecord()
    {
        return new PostgreSqlRecord();
    }

    public function dbQueryBuilder()
    {
        return new PostgreSqlQueryBuilder();
    }
}