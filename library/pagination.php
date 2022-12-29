<?php 

namespace library;

class pagination
{
    public $start;
    public $page;
    public $count;
    public $limit;
    public $length;

    public function exploder_page($p1 = 1)
    {
        return explode('/', $_GET['page'])[$p1];
    }

    public function caller($exploder)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET')
        {
            http_response_code(404); redirect();
        } 

        if(isset($_GET['page'])) 
        {
            if($this->exploder_page($exploder) == 0)
            {
                redirect('404');
            }
            else
            {
                $page = $this->exploder_page($exploder);
            }
        }
        else
        {
            $page = 1;
        }

        if(ctype_digit($page) === false) 
        {
            $page = 1;
        }
        return $page;
    }

    public function p($count, $limit, $exploder = '/')
    {
        $this->count  = $count;
        $this->limit  = $limit;
        $this->page   = $this->caller($exploder);
        $this->start  = ($this->page * $this->limit) - $this->limit;
        $this->length = ceil($count / $this->limit);
        return $this;
    }

    public static function selector($p, $prefix = false)
    {
        $page = ceil($p->count / $p->limit);

        if($p->page > 3)
        {
            echo '<a href="/'.$prefix.'p/1" >начало</a>';
        }

        if($p->page > 1)
        {
            echo '<a href="/'.$prefix.'p/'.($p->page - 1).'" >&#171</a>';
        }

        if(($p->page - 20) > 1)
        {
            echo '<a href="/'.$prefix.'p/'.($p->page - 20).'" >'.($p->page - 20).'</a>';
            echo '<a>...</a>';
        }

        if($page > 1)
        {
            for($i = ($p->page - 3); $i < ($page + 1); $i++)
            {
                if($i > 0 and $i <= ($p->page + 3))
                {
                    if($p->page == $i)
                    {
                        $swch = 'active';
                    }
                    else
                    {
                        $swch = false;   
                    }
                    echo '<a href="/'.$prefix.'p/'.$i.'" class="'.$swch.'"">'.$i.'</a>';
                }
            }

            
            if(($p->page + 20) < $p->length)
            {
                echo '<a>...</a>';
                echo '<a href="/'.$prefix.'p/'.($p->page + 20).'" >'.($p->page + 20).'</a>';
            }

            if(($p->page + 1) <= $p->length)
            {
                echo '<a href="/'.$prefix.'p/'.($p->page + 1).'" >&#187</a>';
            }

            if(($p->page + 3) <= $p->length)
            {
                echo '<a href="/'.$prefix.'p/'.$p->length.'" >конец</a>';
            }
        }

        if($p->count >= 1 && $p->page > $p->length)
        {
            redirect();
        }

        if($p->count < 1 && $p->page > 1 && $p->length == 0 || $p->page == 0)
        {
            redirect();
        }
    }
}