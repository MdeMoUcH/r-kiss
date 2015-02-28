<?php
/*****************************
 * R-KISS
 * Ajax
 * Desarrollado por MdeMoUcH
 * mdemouch@gmail.com
 * http://www.lagranm.com/
 *****************************/

include('lib/functions.php');
include('lib/config.php');
include('lib/bbdd.php');
include('lib/session.php');


$session = new session();
	
if($session->login){
	if(@$_POST['action'] == 'borrar-host' && @$_POST['host'] != ''){
		$bbdd = new bbdd();
		if($bbdd->insertUpdate('DELETE FROM tbl_log WHERE host = "'.$_POST['host'].'"')){
			$s_result = 'Se han borrado todos los registros de "'.$_POST['host'].'" con éxito.';
		}else{
			$s_result = 'Hubo algún problema y no se pudieron borrar los registros de "'.$_POST['host'].'".';
		}
		$bbdd->close();
		
		die($s_result);
	}elseif(@$_POST['action'] == 'borrar-registro' && @$_POST['id'] != ''){
		$bbdd = new bbdd();
		if($bbdd->insertUpdate('DELETE FROM tbl_log WHERE id = '.$_POST['id'].'')){
			$s_result = 'Se ha borrado el registro con éxito.';
		}else{
			$s_result = 'Hubo algún problema y no se pudo borrar el registro.';
		}
		$bbdd->close();
		
		die($s_result);
	}elseif(@$_POST['action'] == 'add-host' && @$_POST['host'] != ''){
		$a_data = array('host' => $_POST['host'],
						'ip' => getIP(),
						'mode' => 'default');
		$bbdd = new bbdd();
		if($bbdd->insert($a_data,'tbl_log')){
			$s_result = 'Se ha registrado del host con éxito.';
		}else{
			$s_result = 'Hubo algún problema y no se pudo registrar el host.';
		}
		$bbdd->close();
		
		die($s_result);
	}else{
		Header('Location: '.$session->urlbase);
		die();
	}
}else{
	Header('Location: '.$session->urlbase);
	die();
}






