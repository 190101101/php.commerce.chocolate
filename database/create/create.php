<?php 

namespace database\create;
use PDOStatement;
use Exception;
use PDO;

trait create
{
    #$this->db->create('article', $data);
    public function create($t1, $values)
    {   
        try {   
            $stmt = $this->db->prepare("INSERT INTO $t1 SET {$this->keys($values)}");
            $stmt->execute(array_values($values));
            return $stmt->rowCount() > 0 ? ['status' => TRUE] : ['status' => FALSE];
        } catch (Exception $e) {
            return ['status' => FALSE, 'error' => $e->getMessage()];
        }
    }
}

