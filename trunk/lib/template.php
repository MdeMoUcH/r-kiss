<?php
/*****************************
 * R-KISS
 * Clase: template
 * Desarrollado por MdeMoUcH
 * mdemouch@gmail.com
 * http://www.lagranm.com/
 *****************************/
	 
class template extends config{
	
	function __construct($tpl_name){
		parent::__construct(true);
		
		$this->tpl = file_get_contents($this->path."lib/tpl/".$tpl_name.".tpl");
	}//fun
	
	function setvars($data = array()){
		if(count($data) > 0){
			$tpl_aux = $this->tpl;
			foreach($data as $nombre=>$valor){
				$tpl_aux = str_replace("{{".$nombre."}}",$valor,$tpl_aux);
			}
			$this->tpl = $tpl_aux;
		}
	}//fun
	
	function get($vars = array()){
		$this->setvars($vars);
		return $this->tpl;
	}
	
	
	function show($vars = array()){
		$vars["urlbase"] = $this->urlbase;
		$vars["s_who"] = $this->s_who;
		if(isset($vars["s_titulo"])){
			$vars["s_titulo"] = $vars["s_titulo"].' - '.$this->name;
		}else{
			$vars["s_titulo"] = $this->name;
		}
		$vars["s_subtitulo"] = $this->desc;
		die($this->get($vars));
	}//fun
	
}//class





