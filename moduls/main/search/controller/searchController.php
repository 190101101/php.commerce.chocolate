<?php 

namespace moduls\main\search\controller;
use moduls\main\search\model\searchModel;
use core\controller;
use \library\pagination;

class searchController extends controller
{
    public $search;
    
    public function __construct()
    {
        $this->search = new searchModel();
    }

    public function searchLoad()
    {
        $this->search->searchLoad();
    }


    public function search($search)
    {
        $this->layout('main', 'main', 'search', 'search', 'search', [
            'product' => $this->search->search($search)
        ]);
    }
}