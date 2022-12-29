<?php 

namespace moduls\main\search\model;
use core\model;
use \Valitron\Validator as v;
use \library\robot;

class searchModel extends model
{
    public function searchLoad()
    {
        $data = peel($_POST);

        robot::robotPostCheck($this->return->spam);

        v::lang($_COOKIE['lang'] ?? 'ru');

        $v = new v($data);

        $v->rule('required', [
            'search',
        ]);

        $v->rule('lengthBetween', 'search', 3, 30);

        valitronErrors($v);

        $search = seo(form_char($data['search']));

        $return = $this->db->t2search('product', 'category', 'product_slug', $search, 12, 2);
        
        if($return == false)
        {
            _message(300, $this->return->product_not_found);
        }
        else
        {            
            _message(200, $this->return->success, $return);
        }
    }

    public function search()
    {
        $explode = explode('/', $_GET['page']);
        $new_search = form_char($explode[2]);
        $return = $this->db->t2search('product', 'category', 'product_slug', $new_search, 25, 2);

        if($return == false)
        {
            message(404, $this->return->product_not_found);
            redirect();
        }
        else
        {
            return $return;
        }
    }
}

