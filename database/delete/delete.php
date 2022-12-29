<?php 

namespace database\delete;
use PDOStatement;
use Exception;
use PDO;

trait delete
{
    #$db->delete('user', 10);
    public function delete($t1, $id)
    {
        $stmt = $this->db->query("DELETE FROM $t1 WHERE {$t1}_id = $id");
        return $stmt->rowCount() > 0 ? ['status' => TRUE] : ['status' => FALSE];
    }

    #'table', 'where keys=?', '[values]';
    public function wheredelete($t1, $keys, $values)
    {
        $stmt = $this->db->prepare("DELETE FROM $t1 WHERE $keys");
        $stmt->execute(array_values($values));
        return $stmt->rowCount() > 0 ? ['status' => TRUE] : ['status' => FALSE];
    }
}
