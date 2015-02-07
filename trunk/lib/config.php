<?php

class config {
	
	public $name = 'R-KISS';
	public $desc = 'Rustic Knowledge IP System Service';
	
	public $urlbase = 'http://localhost/r-kiss/';
	public $path = '/var/www/html/r-kiss/';
	
	/* MySQL config: */
	public $db_host = 'localhost';
	public $db_user = 'mysql_user';
	public $db_pass = 'mysql_pass';
	public $db_name = 'db_rkiss';	
	
	public $s_save = 'save_phrass';
	public $s_who = 'user';
	
	
	public $errores = array();
	
    function __construct(){}//contructor
}//class



