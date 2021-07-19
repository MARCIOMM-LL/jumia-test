<?php

namespace App\Core\Helpers;

class QueryBuilder
{
    protected $pdo;

    protected $table;


    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function from($table)
    {
        $this->table = $table;

        return $this;
    }

    public function findBy($attribute)
    {
        $statement = $this->pdo->prepare("SELECT {$attribute} FROM {$this->table}");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_COLUMN);
    }
}