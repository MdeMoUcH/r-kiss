<?php

	include('functions.php');
	include('config.php');
	include('template.php');
	include('bbdd.php');
	
	$config = new config();

	if(@$_GET['host'] != ''  && @$_GET['save'] == $config->s_save){
		$s_mode = 'default';
		if(@$_GET['mode'] != ''){
			$s_mode = filtro($_GET['mode']);
		}else{
			$s_mode = 'default';
		}
		
		$b_save = false;
		
		$bbdd = new bbdd();
		
		switch($s_mode){
			case 'log':
					$b_save = true;
				break;
			default:
					$bbdd->consulta('SELECT * FROM tbl_log WHERE date = (SELECT max(date) FROM tbl_log WHERE host = "yeah")');
					if($bbdd->resultado[0]['ip'] != getIP()){
						$b_save = true;
					}
				break;
		}//switch
		
		if($b_save){
			$a_data = array();
			$a_data['host'] = $_GET['host'];
			$a_data['ip'] = getIP();
			$a_data['mode'] = $s_mode;
			
			$bbdd->insert($a_data,'tbl_log');
		}
		
		$bbdd->close();
		
		die('ok: '.date('Y-m-d H:i:s'));
		
		
	}elseif(@$_GET['who'] == $config->s_who){//Una mínima seguridad para empezar...
		
		if(@$_GET['get'] == 'sh'){
			$tpl = new template('script');
			$tpl->show();
		}
		
		$bbdd = new bbdd();
		if(@$_GET['host'] != ''){
			/*** PANTALLA DE HOST ***/ 
			$bbdd->consulta('SELECT * FROM tbl_log WHERE host = "'.$_GET['host'].'" ORDER BY date DESC;');
			$bbdd->close();
			
			$s_rows = '';
			
			foreach($bbdd->resultado as $element){
				$tpl = new template('host-row');
				$s_rows .= $tpl->get($element);
			}
			
			$tpl = new template('host');
			$s_contenido = $tpl->get(array('s_rows'=>$s_rows));
			
			$tpl = new template('cascara');
			$tpl->show(array('s_contenido'=>$s_contenido));
			
		}else{
			/*** PANTALLA PRINCIPAL ***/
			$bbdd->consulta('SELECT * FROM tbl_log WHERE date in (SELECT MAX(date) FROM tbl_log GROUP BY host) ORDER BY host,date DESC;');
			$bbdd->close();
			
			$s_rows = '';
			
			foreach($bbdd->resultado as $element){
				$tpl = new template('main-row');
				$s_rows .= $tpl->get($element);
			}
			
			$tpl = new template('main');
			$s_contenido = $tpl->get(array('s_rows'=>$s_rows));
			
			$tpl = new template('cascara');
			$tpl->show(array('s_contenido'=>$s_contenido));
		}
	}else{
		header('Location: http://www.lagranm.com');
		die();
	}
	
	
	
	
	
	
