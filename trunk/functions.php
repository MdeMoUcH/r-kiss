<?php

/*** FUNCTIONS ***/

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


function filtro($s_text){ //deprecated.. xD
	return strip_tags(trim($s_text));
}//fun
