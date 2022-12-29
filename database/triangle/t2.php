<?php 

namespace database\triangle;
use PDOStatement;
use Exception;
use PDO;

trait t2
{
    #$db->t2('article', 'category', 2);
    public function t2($t1, $t2, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t2.*, $t1.* FROM $t1
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t2desc('article', 'category', 2);
    public function t2desc($t1, $t2, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id 
            ORDER BY {$t1}.{$t1}_id DESC
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t2limit('article', 'category', 0, 10, 2, 2);
    public function t2limit($t1, $t2, $start = 0, $limit = 100, $mode = 0, $fetch = 0)
    {
        $order = " ORDER BY {$t1}.{$t1}_id DESC ";
        $stmt = $this->db->query("SELECT $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id 
            $order LIMIT $start, $limit
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t2desclimit('article', 'category', limit, 2);
    public function t2desclimit($t1, $t2, $limit, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id 
            ORDER BY {$t1}.{$t1}_id DESC LIMIT $limit
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t2column('article', 'category', 'article_title', 'keti');
    public function t2column($t1, $t2, $c1, $c2, $mode = 0, $fetch = 0)
    {
        $stmt =  $this->db->query("SELECT $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id 
            WHERE {$t1}.{$c1} = '{$c2}'
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t2where('article', 'category', 'article_id = ? and category.category_id = ?', ['10', '11']);
    public function t2where($t1, $t2, $keys, $values = [], $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id WHERE $keys
        "); $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    public function t2wherefunc($t1, $t2, $func, $keys, $values = [], $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT $func FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id WHERE $keys
        "); $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t2id('article', 'category', '17', 2);
    public function t2id($t1, $t2, $id, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id 
            WHERE $t1.{$t1}_id = $id
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t2search('article', 'category', 'category', 'soft', 2);
    public function t2search($t1, $t2, $c1, $c2, $limit = 100, $mode = 0, $fetch = 0)
    {
        $stmt =  $this->db->prepare("SELECT $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id 
            WHERE $c1 LIKE ? ORDER BY {$t1}.{$t1}_id DESC LIMIT $limit
        "); $stmt->execute(["%$c2%"]);
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t2between('article', 'category', 'category.category_id', '16 AND 17',  2);
    public function t2between($t1, $t2, $column, $sql, $mode = 0, $fetch= 0)
    {
        $stmt =  $this->db->query("SELECT $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id 
            WHERE $column BETWEEN $sql
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t2matrix('code', 'token', ['code_name' => 'qwe', 'token.token_id' => '11'], 2);
    public function t2matrix($t1, $t2, $p1 = [], $mode = 0, $fetch= 0)
    {
        $stmt = $this->db->prepare("SELECT $t2.*, $t1.* FROM $t1 
            INNER JOIN $t2 ON $t1.{$t2}_id = $t2.{$t2}_id 
            WHERE {$this->aimp($p1)}");
        $stmt->execute(array_values($p1));
        return $this->fetch($stmt, $mode, $fetch);
    }
    
    public function t2wheresum($t1, $t2, $a, $b, $id, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT SUM({$a}) as $a, SUM({$b}) as $b FROM $t1
            INNER JOIN {$t2} ON {$t1}.{$t1}_id = {$t2}.{$t1}_id WHERE {$t1}.{$t1}_id = $id
        "); return $this->fetch($stmt, $mode, $fetch);
    }

    public function t2wherecount($t1, $t2, $column, $key, $values = [], $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT COUNT({$column}) as count FROM $t1
            INNER JOIN {$t2} ON {$t1}.{$t2}_id = {$t2}.{$t2}_id WHERE $key");
        $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }
}