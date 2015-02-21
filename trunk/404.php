<?php
/*****************************
 * R-KISS
 * 404
 * Desarrollado por MdeMoUcH
 * mdemouch@gmail.com
 * http://www.lagranm.com/
 *****************************/

include('lib/functions.php');
include('lib/config.php');
include('lib/template.php');

//$config = new config();
	
$tpl = new template('cascara');
$tpl->show(array('s_contenido'=>'No se ha encontrado la página que buscas.','s_titulo' => '404'));
	
	
	
	
	
	
	
	
	
