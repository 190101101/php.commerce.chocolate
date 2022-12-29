<?php 

namespace moduls\main\blog\controller;
use moduls\main\blog\model\blogModel;
use \core\controller;
use \library\pagination as p;

class blogController extends controller
{
    public $blog;
    public $p;
    
    public function __construct()
    {
        parent::__construct();
        $this->blog = new blogModel();
        $this->p = new p();
    }

    public function blog()
    {
        $this->layout('main', 'main', 'blog', 'blog', 'blog', [
            'page' => $p = $this->p->p($this->blog->counter(), 12, 2),
            'blog' => $this->blog->blog($p->start, $p->limit)
        ]);
    }

    public function article($article_slug)
    {
        isXmlHttpRequest('blog/p/1');
        $this->view('main', 'blog', 'blog', 'article', [
            'blog' => $this->blog->article($article_slug),
        ]);
    }
}

