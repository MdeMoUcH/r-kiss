<?php
/*****************************
 * R-KISS
 * Clase: session
 * Desarrollado por MdeMoUcH
 * mdemouch@gmail.com
 * http://www.lagranm.com/
 *****************************/

class session extends config{
	
    function __construct(){
		session_start();
		if(@$_SESSION['login'] == $this->name){
			$this->login = true;
		}else{
			$this->login = false;
		}
	}//contructor
	
	function login($user,$pass){
		if($user == $this->s_who && sha1($this->s_save) == $pass){
			$_SESSION['login'] = $this->name;
			$this->login = true;
		}else{
			$this->login = false;
		}
		return $this->login;
	}//fun
	
	function logout(){
		$_SESSION['login'] = '';
		header('Location: '.$session->urlbase);
		die();
	}//fun
}//class



