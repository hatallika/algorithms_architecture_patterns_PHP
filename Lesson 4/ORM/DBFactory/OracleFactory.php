<?php

class OracleFactory implements DBFactory
{

    public function dbConection()
    {
        return new OracleConection();
    }

    public function dbRecord()
    {
        return new OracleRecord();
    }

    public function dbQueryBuilder()
    {
        return new OracleQueryBuilder();
    }
}