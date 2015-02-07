<?php
/*****************************
 * R-KISS
 * Clase: bbdd
 * Desarrollado por MdeMoUcH
 * mdemouch@gmail.com
 * http://www.lagranm.com/
 *****************************/

class bbdd extends config{
    function __construct(){
        $this->resultado = array();
        $this->errores = array();
        
        $this->conexion = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name)
                or $this->errores[] = 'No se pudo conectar a la base de datos ('.mysqli_error($this->conexion).')';
    }//constructor
    
    function close(){
        mysqli_close($this->conexion);
    }//fun

    function consulta($s_sql){
        $result = $this->conexion->query($s_sql)
				or $this->errores[] = 'Error en la consulta. ('.mysqli_error($this->conexion).')';

        $this->resultado = array();

        while(@$aux = mysqli_fetch_array($result)){
            $this->resultado[] = $aux;
        }

        if(count($this->resultado) >= 1){
            return true;
        }else{
            return false;
        }
    }//fun
    
    
    function filtro($s_cadena){
		return mysqli_real_escape_string($this->conexion,trim($s_cadena));
	}//fun
	
    
    function select($a_data, $s_tabla){
		$s_where = '';
		foreach($a_data as $name=>$value){
			if($s_where != ''){
				$s_where .= ' AND ';
			}
			$s_where .= $name.' = "'.$this->filtro($value).'" ';
		}
		die('SELECT * FROM '.$s_tabla.' WHERE '.$s_where);
		return $this->consulta('SELECT * FROM '.$s_tabla.' WHERE '.$s_where);
		
	}//fun


    function insertUpdate($s_sql){
        $b_ok = $this->conexion->query($s_sql);
        if(!$b_ok){
            $this->errores[] = 'Error en el insert-update. ('.mysqli_error($this->conexion).')';
        }//if
        return $b_ok;
    }//fun
	
	
	function insert($a_data,$s_tabla){
		if(count($a_data)){
			$s_campos = '';
			$s_values = '';
			
			foreach($a_data as $nombre=>$valor){
				if($s_campos == ''){
					$s_campos = $nombre;
					$s_values .= '"'.$this->filtro($valor).'"';
				}else{
					$s_campos .= ', '.$nombre;
					$s_values .= ', "'.$this->filtro($valor).'"';
				}
			}
			return $this->insertUpdate('INSERT INTO '.$s_tabla.' ('.$s_campos.') VALUES ('.$s_values.');');
		}else{
			$this->errores[] = 'No se han encontrado datos.';
			return false;
		}
	}//fun
	
	
	function update($a_data,$s_tabla,$id){
		if(count($a_data)){
			$s_update = '';
			
			foreach($a_data as $nombre=>$valor){
				if($s_update == ''){
					$s_update = $nombre.'="'.$this->filtro($valor).'"';
				}else{
					$s_update .= ', '.$nombre.'="'.$this->filtro($valor).'"';
				}
			}
			return $this->insertUpdate('UPDATE '.$s_tabla.' SET '.$s_update.' WHERE id = '.$id.';');
		}else{
			$this->errores[] = 'No se han encontrado datos.';
			return false;
		}
	}//fun
}//class
