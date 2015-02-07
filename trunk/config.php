<?php

class config {
	
	public $name = 'R-KISS';
	
	public $urlbase = 'http://localhost/r-kiss/';
	public $path = '/var/www/html/r-kiss/';
	
	/* MySQL config: */
	public $db_host = 'localhost';
	public $db_user = 'mysql_user';
	public $db_pass = 'mysql_pass';
	public $db_name = 'db_rkis';	
	
	public $s_save = 'save_phrass';
	public $s_who = 'user';
	
	
	public $a_errores = array();
	
    function __construct(){}//contructor
}//class



