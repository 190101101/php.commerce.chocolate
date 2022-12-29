<?php 

namespace database\triangle;
use PDOStatement;
use Exception;
use PDO;

trait triangle
{
    #$db->sql('SELECT * FROM code', 2);
    public function sql($sql, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query($sql);
        return $this->fetch($stmt, $mode, $fetch);
    }
    
    #$db->tsql('SELECT * FROM article WHERE article_id = ?', [10]);
    public function tsql($sql, $values = [], $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    // $db->wherecount('notice', 'notice_status = ? && notice_user_id =?', [0, get_user_id()])->count
    public function wherecount($t1, $keys, $values = [], $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) as count FROM $t1 WHERE $keys");
        $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->wherelikecount('code', 'code_token', 'code 1')->count;
    public function wherelikecount($t1, $c1, $c2, $limit = 100, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) as count FROM $t1
            WHERE $c1 LIKE ? ORDER BY {$t1}_id DESC LIMIT 0, $limit
        "); $stmt->execute(["%$c2%"]);
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->idbyc1('category', 'category_slug', 'javascript');
    public function idbyc1($t1, $c1, $c2, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT {$t1}_id FROM $t1 WHERE $c1 = '{$c2}'");
        return $this->fetch($stmt, $mode, $fetch);
    }

    /*R*/ #$this->db->trianglewhere('comment', 'user', 'article', 'article_slug=?', [$article_slug], 2);
    public function trianglewhere($t1, $t2, $t3, $keys, $values, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
            INNER JOIN $t3 ON $t1.{$t3}_id = $t3.{$t3}_id 
            WHERE $keys
        "); $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }
}