<?php

namespace App\Models;


abstract class BaseModel implements CrudInterface
{
    protected $table;
    protected $connection;
    protected $primaryKey = 'id';

    public function __construct()
    {
        //$this->connection; //connect pdo to mysql
    }
}
