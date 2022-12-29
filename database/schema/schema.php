<?php 

namespace database\schema;
use PDOStatement;
use Exception;
use PDO;

trait schema
{
	#$db->field('code');
    public function field($t1)
    {
        return $this->db->query("DESCRIBE $t1")->fetchAll($this->column);
    }

    #$db->truncate('table');
    public function truncate($t1)
    {
        return $this->db->query("TRUNCATE TABLE $t1");
    }

    public function transation()
    {
        return $this->db->beginTransaction();
    }

    public function cancel()
    {
        return $this->db->rollBack();
    }

    public function commit()
    {
        return $this->db->commit();
    }

}