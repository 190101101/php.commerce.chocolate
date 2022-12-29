<?php 

namespace database\triangle;
use PDOStatement;
use Exception;
use PDO;

trait t1
{
    #$db->t1('code', 2, 1);
    public function t1($t1, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT * FROM $t1");
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1desc('code', 2);
    public function t1desc($t1, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT * FROM $t1 ORDER BY {$t1}_id DESC");
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1limit('code', 2);
    public function t1limit($t1, $start = 0, $limit = 100, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT * FROM $t1 LIMIT $start, $limit");
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1desclimit('code', 2);
    public function t1desclimit($t1, $p1, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT * FROM $t1 ORDER BY {$t1}_id DESC LIMIT 0, $p1");
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1column('code', 'column', '60cc99b8342e');
    public function t1column($t1, $c1, $c2, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT * FROM $t1 WHERE $c1 = '{$c2}'");
        return $this->fetch($stmt, $mode, $fetch);
    }
    
    #$db->t1where('article', 'article_id = ? AND article_title = ?', ['10', 'keti']);
    #$this->db->t1where('image', 'image_id < ?', [$blog->blog_id]);
    public function t1where($t1, $keys, $values = [], $mode = 0, $fetch= 0)
    {
        $stmt = $this->db->prepare("SELECT * FROM $t1 WHERE $keys");
        $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1wherecolumn('user', ['user_id', 'user_login'], 'user_id=?', ['1']);
    public function t1wherecolumn($t1, $column, $keys, $values = [], $mode = 0, $fetch= 0)
    {
        $stmt = $this->db->prepare("SELECT {$this->comma_separated($column)} FROM $t1 WHERE $keys");
        $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1wherein('code', 'id', $data, 2);
    public function t1wherein($t1, $keys, $values, $mode = 0, $fetch= 0)
    {
        $stmt = $this->db->prepare("SELECT * FROM $t1 WHERE $keys IN ({$this->question_mark($values)})");
        $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    // $db->t1columnwherein('product', ['product_id'], 'product_id', $products, 2);
    public function t1columnwherein($t1, $column, $keys, $values, $mode = 0, $fetch= 0)
    {
        $stmt = $this->db->prepare("SELECT {$this->comma_separated($column)} FROM $t1 
            WHERE $keys IN ({$this->question_mark($values)})");
        $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1wherecolumnin('user', ['user_id', 'user_login'], 'user_id', $data, 2);
    public function t1wherecolumnin($t1, $column, $keys, $values, $mode = 0, $fetch= 0)
    {
        $stmt = $this->db->prepare("SELECT {$this->comma_separated($column)} 
            FROM $t1 WHERE $keys IN ({$this->question_mark($values)})");
        $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1id('code', '10');
    public function t1id($t1, $id, $mode = 0, $fetch= 0)
    {
        $stmt = $this->db->query("SELECT * FROM $t1 WHERE {$t1}_id = $id");
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1search('code', 'column', '60cc', limit, 2);
    public function t1search($t1, $c1, $c2, $limit = 100, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$t1} 
            WHERE $c1 LIKE ? ORDER BY {$t1}_id DESC LIMIT 0, $limit
        "); $stmt->execute(["%$c2%"]);
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1between('code', 'id', '10 AND 20', 2);
    public function t1between($t1, $column, $sql, $mode = 0, $fetch= 0)
    {
        $stmt = $this->db->query("SELECT * FROM $t1 WHERE $column BETWEEN $sql");
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1matrix('article', ['article_title' => 'keti', ], 2);
    public function t1matrix($t1, $p1 = [], $mode = 0, $fetch= 0)
    {
        $stmt = $this->db->prepare("SELECT * FROM $t1 WHERE {$this->aimp($p1)}");
        $stmt->execute(array_values($p1));
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1matrix('info_50', $_POST);
    public function t1filter($t1, $p1 = [], $mode = 0, $fetch= 0)
    {
        foreach($p1 as $key => $val)
            !empty($val) ? $p2[$key] = $val : false;
        $stmt = $this->db->prepare("SELECT * FROM $t1 WHERE {$this->aimp($p2)}");
        $stmt->execute(array_values($p2));
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1sum('code', 'permit');
    public function t1sum($t1, $column, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT SUM({$column}) as sum FROM $t1"); 
        return $this->fetch($stmt, $mode, $fetch);
    }

    public function t1wheresum($t1, $column, $key, $values = [], $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT SUM({$column}) as sum FROM $t1 WHERE $key");
        $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1max('code');
    public function t1max($t1, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT MAX({$t1}_id) as max FROM $t1"); 
        return $this->fetch($stmt, $mode, $fetch);
    }
    
    #$db->t1min('code');
    public function t1min($t1, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT MIN({$t1}_id) as min FROM $t1"); 
        return $this->fetch($stmt, $mode, $fetch);
    }

    public function t1get($t1, $col, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT $col FROM $t1"); 
        return $this->fetch($stmt, $mode, $fetch);
    }

    // $this->db->t1wherecount('orders', 'orders_id', 'orders_status=1 && orders_type=?', ['payment']);
    public function t1wherecount($t1, $column, $key, $values = [], $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->prepare("SELECT COUNT({$column}) as count FROM $t1 WHERE $key");
        $stmt->execute(array_values($values));
        return $this->fetch($stmt, $mode, $fetch);
    }

    #$db->t1count('code');
    public function t1count($t1, $mode = 0, $fetch = 0)
    {
        $stmt = $this->db->query("SELECT COUNT(*) as count FROM $t1"); 
        return $this->fetch($stmt, $mode, $fetch);
    }

}