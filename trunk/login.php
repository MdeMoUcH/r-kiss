<?php
/*****************************
 * R-KISS
 * Login
 * Desarrollado por MdeMoUcH
 * mdemouch@gmail.com
 * http://www.lagranm.com/
 *****************************/

include('lib/functions.php');
include('lib/config.php');
include('lib/template.php');
include('lib/session.php');


$session = new session();

if(!$session->login){
	if(@$_POST['user'] != '' && @$_POST['pass'] != ''){
		if($session->login($_POST['user'],$_POST['pass'])){
			die('ok');
		}else{
			die('ko');
		}
	}

	$tpl = new template('login');
	$s_contenido = $tpl->get();
		
	$tpl = new template('cascara');
	$tpl->show(array('s_contenido'=>$s_contenido));
}else{
	if(@$_GET['logout'] == 'true'){
		$session->logout();
	}else{
		header('Location: '.$session->urlbase);
		die();
	}
}
		
	
	
	
	
	
	
	
	
