<?php  

namespace Libs;


class DB {

	private static $dbhost = 'localhost';
	private static $dbuser = 'root';
	private static $dbpass = '';
	private static $dbname = 'vac_manage_documentation';	
	public $result;
	public $error = 0;

	// extends connection
	public function __construct () {
		$this->conn = new \mysqli( self::$dbhost , self::$dbuser , self::$dbpass ,  self::$dbname );	
	}


	/**
	 * [__set description]
	 */
	public function set( $key = '' , $value = '' ) {
		$this->{$key} = $value;
	}

	/**
	 * [close description]
	 * @return [type] [description]
	 */
	public function query ($query =null , $bind = null) {
		if ( !is_null($query) ) {

			$query = $this->conn->query($query);
			if ( !$query ) {
				$this->error += 1;
			}
			$this->result = $query;
		}

		return $this;
	}

	/**
	 * [fetch description]
	 * @return [type] [description]
	 */
	public function fetchOne () {
		$row = array();
		
		if ( empty($this->error) ) {
			if ( $this->result->num_rows > 0 ) {
				$row = $this->result->fetch_assoc();
				return $row;
			} else {
				$this->error += 1;
			}
		}

		return $row;
	}

	/**
	 * [fetchArray description]
	 * @return [type] [description]
	 */
	public function fetchArray () {
		$rows = array();

		if ( empty($this->error) ) {
			if ( $this->result->num_rows > 0 ) {
				while( $row = $this->result->fetch_assoc()) {
				    $rows[] = $row;
				}
				return $rows;
			} else {
				$this->error += 1;
			}	
		}

		return $rows;
	}

	/**
	 * [fetchObject description]
	 * @return [type] [description]
	 */
	public function fetchObject () {
		$rows = array();

		if ( empty($this->error) ) {
			if ( $this->result->num_rows > 0 ) {
				while( $row = $this->result->fetch_object()) {
				    $rows[] = $row;
				}
				return $rows;
			} else {
				$this->error += 1;
			}
		}

		return $rows;
	}


	/**
	 * [reset description]
	 * @return [type] [description]
	 */
	public function reset () {
		$this->error  = 0;
		$this->result = '';
	}


	

}


?>
