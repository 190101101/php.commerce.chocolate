<?php 

namespace database\update;
use PDOStatement;
use Exception;
use PDO;

trait update
{
    public function update($t1, $values, $p1 = [])
    {
        try {

            $id = $values[$p1['id']];
            unset($values[$p1['id']]);
            $execute = $values;
            $execute += [$p1['id'] => $id];

            $stmt = $this->db->prepare("UPDATE $t1 SET {$this->keys($values)} WHERE {$p1['id']}=?");
            $stmt->execute(array_values($execute));
            return $stmt->rowCount() > 0 ? ['status' => TRUE] : ['status' => FALSE];

        } catch (Exception $e) {
            return ['status' => FALSE, 'error' => $e->getMessage()];
        }
    }

    #'table', 'keys=?', 'where id=?', '[values]';
    #$this->db->whereupdate('code', 'code_token=?', 'code_id=?', [uniqid(), 19]);
    public function whereupdate($t1, $keys, $where, $values)
    {
        try {
            $stmt = $this->db->prepare("UPDATE $t1 SET $keys WHERE $where");
            $stmt->execute(array_values($values));
            return $stmt->rowCount() > 0 ? ['status' => TRUE] : ['status' => FALSE];
        } catch (Exception $e) {
            return ['status' => FALSE, 'error' => $e->getMessage()];
        }
    }
}

