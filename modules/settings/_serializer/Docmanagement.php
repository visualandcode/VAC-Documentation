<?php  



class Docmanagement extends \Libs\DB {

	/**
	 * [_init description]
	 * @return [type] [description]
	 */
	public function _init () {
		$this->request = new \Libs\Request();
	}

	/**
	 * [modules description]
	 * @return [type] [description]
	 */
	public function modules () {
		$getallmodules = $this->query("SELECT sm_modulepath  , sm_modulename, sm_id FROM sys_modules a");
		$fetchmodules = $getallmodules->fetchArray();
		if ( !$getallmodules->error ) {
			if ( count($fetchmodules) > 0 ) {
				$modules = array();
				foreach ( $fetchmodules as $key => $val ) {
					$sm_modulepath = rtrim($val["sm_modulepath"],"/");
					$sm_modulepath = ltrim($sm_modulepath,"/");

					if ( strpos($sm_modulepath , "/") != true ) {
						$inc_modules = array();
						$inc_modules["sm_modulepath"] = $sm_modulepath;
						$inc_modules["sm_modulename"] = $val['sm_modulename'];
						$modules[] = $inc_modules;
					}	
				}

				$this->request->resjson(array(
					'result' => $modules
				));
			}
		}
	}

	/**
	 * [directory description]
	 * @return [type] [description]
	 */
	public function directory () {
		$contentdir = $this->request->get("contentdir");
		$mode 	    = $this->request->get("mode");

		if ( $mode == 'directory' ) {
			$reqdir = explode( "/" , $contentdir);
			$directorysub = $reqdir[1] . ",dirnone";
			if ( strpos( $directorysub , "," ) !== false ) {
				$contentdir = explode("," , $directorysub);
			} else {
				$contentdir = array($contentdir);
			}
		}

		$listdir = array();
		if ( is_array( $contentdir ) ) {
			foreach ( $contentdir as $key => $val ) {
				if ( $mode == 'directory' ) {
					$dir = "modules/" . $reqdir[0] . "/md/" . $val;
					$contendir = $this->__listdir($dir);
					$arrsubdir = array();
					foreach ( $contendir as $keymd => $valmd ) {
						$arrsubdir['_sidebar.md'] = '_sidebar.md';
						$arrsubdir[$keymd] = $valmd;
					}
					$listdir[$val] = $arrsubdir;
				} 

				if ( $mode == 'modules' ) {
					$dir = "modules/" . $val . "/md";
					$contentdir = $this->__listdir($dir);
					$arrsubdir = array();
					foreach ( $contentdir as $keymd => $valmd ) {
						$mddir = $dir . "/" . $valmd;
						$contentsubdir = $this->__listdir($mddir);
						$arrsubdir[$valmd] = $contentsubdir;
					}

					$listdir[$val] = $arrsubdir;
				}

			}
		}

		$this->request->resjson(array(
			"result" => $listdir
		));

	}

	/**
	 * [listdir description]
	 * @return [type] [description]
	 */
	public function __listdir ($dir = null) {
		$callback = array();
		if ( is_dir( $dir ) && $handle = opendir($dir) ) {
			while (false !== ($entry = readdir($handle))) {
		        if ($entry != "." && $entry != "..") {
		            $callback[] = $entry;
		        }
		    }
		    closedir($handle);
		}

		return $callback;
	}






}


?>
