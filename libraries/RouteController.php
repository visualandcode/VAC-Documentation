<?php  

namespace Libs;


class RouteController extends \Libs\Request {

	public $_controller = array(); // register controller
	public $_dir 		= "_serializer";
	public $_controllerurl;
	public $_controllerfile;
	public $_method;


	/**
	 * [_parseUrl description]
	 * @return [type] [description]
	 */
	public function _parseUrl () {
		$url 	   = $this->uri();
		$this->url = $url;
		if ( strpos( $url , "/" ) !== false ) {
			$url   = explode( "/" , $url );
			$this->_controllerurl 	= isset($url[0]) ? $url[0] : null;
			$this->_controllerfile  = ucfirst(isset($url[1]) ? $url[1] : null);
			$this->_method 			= isset($url[2]) ? $url[2] : 'findAll';
		}
	}

	/**
	 * [_init description]
	 * @return [type] [description]
	 */
	public function _init () {

		$this->general = new \Libs\General;
		$this->_parseUrl();
		$this->__policy();
		$this->Controller();

	}

	/**
	 * [policy description]
	 * @return [type] [description]
	 */
	private function __policy () {
		$accessmodules = $this->general->separator_to_array( "," , $this->getsession("modulepath"));
		if ( count($accessmodules) > 0 ) {
			if ( !empty($this->url) && $this->url != "_navbar.md" ) {
				$match = 0;
				foreach ( $accessmodules as $keys => $vals ) {
					$vals = strtolower(ltrim(rtrim( $vals , "/" ) , "/"));
					//echo $vals . "\n";
					
					$modulesurls = $this->general->separator_to_array( "/" , $vals);

					if ( $vals == $this->url ) {
						$match += 1;
					} else {
						if ( $vals == $this->_controllerurl ) {
							$match += 1;
						} 

						if ( isset($modulesurls[0]) ) {
							$modulesurls = $modulesurls[0];
							if ( $modulesurls == $this->url ) {
								$match += 1;
							} else {
								if ( $modulesurls == $this->_controllerurl ) {
									$match += 1;
								}
							}
						} 


					}
				}

				if ( $match == 0 ) {
					// $this->resjson(array(
					// 	"msg" => "You have no access to this module."
					// ));
					exit();
				}
			}

		}
	}



	/**
	 * [reg description]
	 * @return [type] [description]
	 */
	public function reg ( $arr = null ) {
		if ( !is_null( $arr ) && is_array($arr) ) {
			$this->_controller = $arr;
		}

		$this->_init();
	}

	/**
	 * [controller description]
	 * @return [type] [description]
	 */
	public function Controller () {
		if ( $this->isAjax() ) {
			$_controllerfile = "modules/" . $this->_controllerurl . "/_serializer/" . $this->_controllerfile . ".php";
			if ( file_exists( $_controllerfile ) ) {
				require_once($_controllerfile);
				if ( class_exists( $this->_controllerfile ) ) {
					$cls = new $this->_controllerfile();
					if ( method_exists( $cls, "_init") ) $cls->_init();
					if ( method_exists( $cls , $this->_method) ) {
						$cls->{$this->_method}();
						return false;
					}
				}

			}
		}
		
	}





}


?>