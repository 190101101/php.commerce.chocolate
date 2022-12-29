<?php 

namespace database\triangle;
use PDOStatement;
use Exception;
use PDO;

trait t3
{
    #$db->t3('article', 'category', 'section', 2);
	public function t3($t1, $t2, $t3, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
            INNER JOIN $t3 ON $t2.{$t3}_id = $t3.{$t3}_id
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t3desc('article', 'category', 'section', 2);
    public function t3desc($t1, $t2, $t3, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
            INNER JOIN $t3 ON $t2.{$t3}_id = $t3.{$t3}_id
            ORDER BY {$t1}.{$t1}_id DESC
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t3limit('article', 'category', 'section', 5, 2);
    public function t3limit($t1, $t2, $t3, $limit = 100, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
            INNER JOIN $t3 ON $t2.{$t3}_id = $t3.{$t3}_id
            ORDER BY {$t1}.{$t1}_id LIMIT 0, $limit
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t3desclimit('article', 'category', 'section', 5, 2);
    public function t3desclimit($t1, $t2, $t3, $limit = 100, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
            INNER JOIN $t3 ON $t2.{$t3}_id = $t3.{$t3}_id
            ORDER BY {$t1}.{$t1}_id DESC LIMIT $limit
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t3column('article', 'category', 'section', 'article.article_id', '24', 2);
    public function t3column($t1, $t2, $t3, $c1, $c2, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
            INNER JOIN $t3 ON $t2.{$t3}_id = $t3.{$t3}_id 
            WHERE $c1 = '{$c2}'
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t3where('article', 'category', 'section', 'article_id = ? and category = ? AND section = ?', ['10', 'psd', 'freebies']);
    public function t3where($t1, $t2, $t3, $keys, $values, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
            INNER JOIN $t3 ON $t2.{$t3}_id = $t3.{$t3}_id 
            WHERE $keys
        "); $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }
    
    #$db->t3id('article', 'category', 'section', '5', 2);
    public function t3id($t1, $t2, $t3, $id, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
            INNER JOIN $t3 ON $t2.{$t3}_id = $t3.{$t3}_id
            WHERE {$t3}.{$t3}_id = {$id}
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t3search('article', 'category', 'section', 'category.category', 'soft', 10, 2, 0);
    public function t3search($t1, $t2, $t3, $c1, $c2, $limit = 100, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
            INNER JOIN $t3 ON $t2.{$t3}_id = $t3.{$t3}_id
            WHERE $c1 LIKE ? ORDER BY $t1.{$t1}_id DESC LIMIT $limit
        "); $stmt->execute(["%$c2%"]);
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t3between('article', 'category', 'section', 'section.section_id', '5 AND 6',  2);
    public function t3between($t1, $t2, $t3, $column, $sql, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
            INNER JOIN $t3 ON $t2.{$t3}_id = $t3.{$t3}_id 
            WHERE $column BETWEEN $sql
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t3matrix('article', 'category', 'section', 
    #    ['article_title' => 'keti', 'category.category_id' => '11', 'section' => 'freebies',
    #], 2);
    public function t3matrix($t1, $t2, $t3, $p1 = [], $mode = 0, $fetch= 0)
    {
        $stmt = $this->db->prepare("SELECT $t3.*, $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id 
            INNER JOIN $t3 ON $t2.{$t3}_id = $t3.{$t3}_id 
            WHERE {$this->aimp($p1)}");
        $stmt->execute(array_values($p1));
        return $this->fetch($stmt, $mode, $fetch);
    }
}
