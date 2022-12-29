<?php 

namespace moduls\main\blog\model;
use core\model;

class blogModel extends model
{
	public function counter()
    {
        return $this->db->t1count('blog')->count;
    }

    public function blog($start, $limit)
    {
        return $this->db->t1limit('blog', $start, $limit, 2, 2);
    }

    public function article($article_slug)
    {
        $return = $this->db->t1where('blog', 'blog_slug=?', [$article_slug]);
        $return == true ?: redirect('pageNotFound');
        return $return;
    }
}
