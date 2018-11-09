<?php  

namespace Libs;

use Libs\General;

class Request extends \Libs\Injection {


	/**
	 * [base_uri description]
	 * @return [type] [description]
	 */
	public function base_uri () {
		$scheme 	   = isset($_SERVER["REQUEST_SCHEME"]) ? $_SERVER["REQUEST_SCHEME"] : null;
		$servername    = isset($_SERVER["SERVER_NAME"]) ? $_SERVER["SERVER_NAME"] : null;
		$uri 		   = $scheme . "://" . $servername;
		return $uri;
	}

	/**
	 * [json description]
	 * @return [type] [description]
	 */
	public function get ( $value = null , $func = null ) {
		$callback = null;
		if ( isset($_REQUEST[$value]) ) 
		{
			$callback = $_REQUEST[$value];
			if ( !is_array($callback) || !is_object($callback) ) 
			{
				$callback = $this->filter($callback);
				if ( !is_null($func) && $callback != false ) 
				{
					if ( method_exists( "\\Libs\\General" , $func) ) {
						$general = new General();
						$callback = $general->{$func}($this->filter($callback));
					}

				}			
			}
		}
		
		return $callback;
	}


	/**
	 * [isPost description]
	 * @return boolean [description]
	 */
	public function isPost () {
		$checkout = isset($_POST) ? $_POST : null;
		if ( count($checkout) > 0 ) {
			return true;
		}

		return false;
	}

	/**
	 * [isAjax description]
	 * @return boolean [description]
	 */
	public function isAjax() {
		return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower(getenv('HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest'));
	}

	/**
	 * [url description]
	 * @return [type] [description]
	 */
	public function uri () {
		$uri = $this->get("_url");
		$uri = ltrim($uri , "/");
		$uri = rtrim($uri , "/");
		return $uri;
	}

	/**
	 * [response description]
	 * @param  [type] $arr [description]
	 * @return [type]      [description]
	 */
	public function resjson ( $arr = null ) {
		$callback = array('success' => false);
		if ( is_array($arr) ) {
			$callback = array_merge( $arr , array('success' => true) );
		}
		echo json_encode($callback , JSON_PRETTY_PRINT);
	}


	/**
	 * [getsession description]
	 * @param  [type] $sessname [description]
	 * @return [type]           [description]
	 */
	public function getsession ( $sessname = null ) {
		$callback = false;
		if ( !is_null($sessname) ) {
			if ( isset($_SESSION[$sessname]) ) {
				$callback = $_SESSION[$sessname];
			}
		}

		return $callback;
	}	

	/**
	 * [setsession description]
	 * @param  string $key   [description]
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function setsession ( $key = '' , $value = '' ) {
		if ( !empty($key) ) {
			$_SESSION[$key] = $value;
		}
	}

	/**
	 * [destroysession description]
	 * @return [type] [description]
	 */
	public function destroysession () {
		session_destroy();
	}

	/**
	 * [host description]
	 * @return [type] [description]
	 */
	public function host () {
		return isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null;
	}



}


?>