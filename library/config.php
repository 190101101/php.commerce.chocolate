<?php 

namespace library;

class config
{

    public $config;
    public $route = [];

    public function __construct($config)
    {
        $this->run($config);
    }

    public function run($config)
    {
        $this->route = $config->home;
    }
}