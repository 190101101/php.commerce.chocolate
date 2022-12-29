<?php 

namespace database;
use PDOStatement;
use Exception;
use PDO;

class database extends PDO
{
    use triangle\t1, triangle\t2, triangle\t3;
    use triangle\triangle, triangle\tfind;
    use create\create;
    use update\update;
    use update\clear;
    use delete\delete;
    use property, helper;
    use schema\schema, helper;

    public function __construct($host, $name, $utf, $user, $password)
    {
        $this->db = new PDO("mysql:host={$host}dbname={$name}{$utf}" , "{$user}", "{$password}",$this->option());
    }

    protected function option(): array
    {
        return [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
    }
}
