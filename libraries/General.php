<?php  

namespace Libs;

class General {


	/**
	 * [md5 description]
	 * @return [type] [description]
	 */
	public function md5( $txt = null ) {
		$callback = null;
		if ( !is_null( $txt ) ) {
			$callback = md5($txt);
		}
		return $callback;
	}


	/**
	 * [to_array description]
	 * @return [type] [description]
	 */
	public function separator_to_array ( $separator = null , $value = null ) {
		$callback = array();
		if ( !is_null($separator) && !is_null($value) ) {
			if ( strpos( $value , $separator ) !== false ) {
				$exp = explode( $separator , $value );
				if ( is_array($exp) ) {
					$callback = $exp;
				}
			}
		}	


		return $callback;

	}

}



?>