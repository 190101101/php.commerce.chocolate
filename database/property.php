<?php 

namespace database;
use PDOStatement;
use Exception;
use PDO;

trait property
{
    private $db;
    private $lazy   = PDO::FETCH_LAZY;
    private $obj    = PDO::FETCH_OBJ;
    private $assoc  = PDO::FETCH_ASSOC;
    private $column = PDO::FETCH_COLUMN;

    private function fetch($stmt, $mode = 0, $fetch = 0)
    {
        if($mode == 0 && $fetch == 0)
        {
            return $stmt->fetch($this->obj);

        } else if($mode == 1 && $fetch == 0)
        {
            return $stmt->fetch($this->assoc);

        } else if($mode == 0 && $fetch == 1)
        {
            return $stmt->fetch($this->lazy);  
     
        } else if($mode == 1 && $fetch == 1)
        {
            return $stmt->fetchColumn();  

        } else if($mode == 2 && $fetch == 0)
        {
            return $stmt->fetchAll($this->obj);

        } else if($mode == 2 && $fetch == 1)
        {
            return $stmt->fetchAll($this->assoc);

        } else if($mode == 2 && $fetch == 2)
        {
            return $stmt;
        }
    }
}