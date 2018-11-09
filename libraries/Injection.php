<?php  


namespace Libs;


class Injection {

	/**
	 * [filter description]
	 * @param  string $txt [description]
	 * @return [type]      [description]
	 */
	public function filter ( $input = "" ) {


		if ( !is_array($input) ) {
			$input = $this->__replace_char_injection($input);

			$__checkType = $this->filter_Char2Num_id( $input );
	
			// jika bukan integer
			if ( $__checkType == 0 ) {
				$input = $this->filter_SQL_InjectionMatch( $input );
				return $input;
			}

			// jika integer
			if ( $__checkType != 0 ) {
				return $input ;
			}		
		}

		return $input;

	}


	/**
	 * [is_html description]
	 * @param  string  $html [description]
	 * @return boolean       [description]
	 */
	public function is_html ( $html = '' ) {
	  return preg_match("/<\/?\w+((\s+\w+(\s*=\s*(?:\".*?\"|'.*?'|[^'\">\s]+))?)+\s*|\s*)\/?>/",$html) != 0;
	}


	/**
	 * [__replace_char_injection description]
	 * @return [type] [description]
	 */
	public function __replace_char_injection ($char = '') {
		$char_arr = array(
			"OR 1=1"  	 , 
			'" or ""="'  , 
			"' or ''=' " ,
			"or=''" ,
			'or="" ' ,
			'or=' ,
			"or =''",
			'or =' ,
			'and=' ,
			'and =' ,
			"' and ''=' ",
			'" and ""="' , 
			'" OR ""="'  , 
			"' OR ''=' " ,
			"' AND ''=' ",
			'" AND ""="' , 
			"DROP TABLE" , 
			"drop table" , 
			"user()" , 
			"system_user()" , 
			"/**/" , 
			"/*" , 
			"*/" , 
			"*/" , 
			"information_schema.schemata" , 
			"LOAD_FILE" , 
			"load_file" , 
			//"--" ,
			"UNION ALL" ,
			"union all" ,  
			"union" ,
			"UNION" ,  
			"#" ,
			";"
		);

		$replace = str_replace( $char_arr , "" ,  $char );

		return $replace;
	}


	/**
	 * [filter_SQL_InjectionMatch description]
	 * @param  string $id [description]
	 * @return [type]     [description]
	 */
	public function filter_SQL_InjectionMatch ( $id = "" ) {
		$id = html_entity_decode($id, ENT_NOQUOTES, 'UTF-8');
		$sql_injection_command = 0;
		$code_injection = 0;

		if ( $this->is_html( $id ) ) {
			$id = htmlentities($id);
		}

		// send back url
		if ( strpos( $id , "../" ) !== false ) {
			$sql_injection_command += 1;
			$code_injection = 1001;
		} 


		if ( !preg_match( "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i" , $id ) ) {
			$preg_sql_injection = preg_match( '/(\s*([\0\b\'\"\n\r\t\%\_\\\\]*\s*(((select\s*.+\s*from\s*.+)|(insert\s*.+\s*into\s*.+)|(update\s*.+\s*set\s*.+)|(delete\s*.+\s*from\s*.+)|(drop\s*.+)|(truncate\s*.+)|(alter\s*.+)|(exec\s*.+)|(\s*(all|any|not|and|between|in|like|or|some|contains|containsall|containskey)\s*.+[\=\>\<=\!\~]+.+)|(let\s+.+[\=]\s*.*)|(begin\s*.*\s*end)|(\s*(\-\-)\s*.*\s+)|(\s*(contains|containsall|containskey)\s+.*)))(\s*[\;]\s*)*)+)/im' , $id. " " );
			
			if ( preg_match( '(\/?[^\/\.\n]+?\/(?P<DOUBLE>\.\.\/))' , $id) ) {
				$sql_injection_command += 1;
				$code_injection = 1102;
				
			}	

			if ( $preg_sql_injection === 1 ) {
				$sql_injection_command += 1;
				$code_injection = 1002;
				
			} 	
		}

		if ( preg_match( '/(?:etc\/\W*passwd)/im' , $id) ) {
			$sql_injection_command += 1;
			$code_injection = 1003;
			
		}

		if ( preg_match( '/(?:(\%SYSTEMROOT\%))/im' , $id)) {
			$sql_injection_command += 1;
			$code_injection = 1004;
			
		}


		if ( $sql_injection_command > 0 ) {
			return false;
		}

		return $id;
	}


	/**
	 * [filter_SQL_Escaping description]
	 * @param  [type] $input [description]
	 * @return [type]        [description]
	 */
	public function filter_SQL_Escaping($input = ""){
		$input = html_entity_decode($input, ENT_NOQUOTES, 'UTF-8');

		$replace = array(
			'\\' => '\\\\',
			"\x00" => "\\x00",
			"\x1a" => "\\x1a",
			"\n" => "\\n",
			"\r" => "\\r",
			"'" => "\'",
			'"' => '\"'
		);
		
		$output = strtr($input, $replace);
		return $output;
	}

	/*
	Escaping for SQL attack:->
		Escaping each element if not alphanumeric.
	*/	
	public function filter_SQL_CompleteEscape($input){
		$input = html_entity_decode($input, ENT_NOQUOTES, 'UTF-8');
		
		$arr = str_split($input);
		$output1 = '';
		foreach($arr as $i)
		{
			if (!ctype_alnum($i))
                $output1 .='\\'.$i;
            else
                $output1 .= $i;
        }       
        return $output1;
	}


	//Not allowing character in variables (such as $id for cases such as SELECT name FROM users WHERE id = $id) 
	//causing unexpected outputs.
	public function filter_Char2Num_id($input){
		$input = html_entity_decode($input, ENT_NOQUOTES, 'UTF-8');
		if(!is_numeric($input)) {
			$input = 0;
		} else {
			$input = (int)$input;
		}

		return $input;
		
	}	



}




?>