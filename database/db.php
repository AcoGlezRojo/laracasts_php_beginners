<?php

class Database
{
    private $conection;

    public function __construct($config)
    {
        $dsn = 'mysql:' . http_build_query($config['database'], '', ';');
        $this->conection = new PDO($dsn, $config['database']['user'], $config['database']['password']);
    }

    public function query($query, $params = [])
    {
        $statement = $this->conection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}
