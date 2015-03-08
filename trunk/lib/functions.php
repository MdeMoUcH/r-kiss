<?php
/*****************************
 * R-KISS
 * Funciones
 * Desarrollado por MdeMoUcH
 * mdemouch@gmail.com
 * http://www.lagranm.com/
 *****************************/

function muere($s_msg = '', $b_objeto = true, $b_die = true){
    if($b_objeto){
        print_r('<pre>');
        print_r($s_msg);
        print_r('</pre>');
    }else{
        print_r($s_msg);
    }
    if($b_die){
        die;
    }
}//fun

function getIP(){
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$s_ip = $_SERVER['HTTP_CLIENT_IP'];
	}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$s_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
		$s_ip = $_SERVER['REMOTE_ADDR'];
	}
	return $s_ip;
}//fun


function ipIsLocal($s_ip){
	$a_ip = explode('.',$s_ip);
	
	if($a_ip[0] == '10'){
		return true;
	}elseif($a_ip[0] == '127'){
		return true;
	}elseif($a_ip[0] == '192' && $a_ip[1] == '168'){
		return true;
	}elseif($a_ip[0] == '169' && $a_ip[1] == '254'){
		return true;
	}elseif($a_ip[0] == '172' && $a_ip[1] >= '16' && $a_ip[1] <= '31'){
		return true;
	}else{
		return false;
	}
}


function filtro($s_text){
	return strip_tags(trim($s_text));
}//fun
