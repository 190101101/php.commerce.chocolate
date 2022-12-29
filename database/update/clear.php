<?php 

namespace database\update;
use PDOStatement;
use Exception;
use PDO;

trait clear
{
    public function clear($t1, $c, $id)
    {
        $stmt = $this->db->query("UPDATE $t1 SET $c = NULL WHERE {$t1}_id = {$id}");
        return $stmt->rowCount() > 0 ? ['status' => TRUE] : ['status' => FALSE];
    }
    
    public function increment($t1, $column, $id)
    {
        $stmt = $this->db->query("UPDATE $t1 SET {$column} = {$column} + 1 WHERE {$t1}_id = $id");
        return $stmt->rowCount() > 0 ? ['status' => TRUE] : ['status' => FALSE];
    }

    public function decrement($t1, $column, $id)
    {
        $stmt = $this->db->query("UPDATE $t1 SET {$column} = {$column} - 1 WHERE {$t1}_id = $id");
        return $stmt->rowCount() > 0 ? ['status' => TRUE] : ['status' => FALSE];
    }
}

