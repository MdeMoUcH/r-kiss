<?php
/*****************************
 * R-KISS
 * Clase: config
 * Desarrollado por MdeMoUcH
 * mdemouch@gmail.com
 * http://www.lagranm.com/
 *****************************/

class config {
	
	/* General */
	public $name = 'R-KISS';
	public $desc = 'Rustic Knowledge IP System Service';
	
	public $urlbase = 'http://localhost/r-kiss/';
	public $path = '/var/www/html/r-kiss/';
	
	/* MySQL: */
	public $db_host = 'localhost';
	public $db_user = 'mysql_user';
	public $db_pass = 'mysql_pass';
	public $db_name = 'db_rkiss';	
	
	/* Acceso */
	public $s_who = 'user'; //usuario
	public $s_save = 'save_phrass'; //contraseña
	
	
	public $errores = array();
	
    function __construct(){}//contructor
}//class



