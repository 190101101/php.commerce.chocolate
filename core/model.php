<?php 

namespace core;
use database\database;
use \library\language;

class model extends database
{
	public $db;
    public $return;

	public function __construct()
	{
		$this->db = new database(DBHOST, DBNAME, UTF, DBUSER, DBPASS);
        $this->return = language::choiseLang();
	}
}