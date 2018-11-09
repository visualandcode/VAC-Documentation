<?php  
if ( isset( $_POST ) ) {

	$mdcontent = isset($_POST["mdcontent"]) ? $_POST["mdcontent"] : null;
	$filename  = isset($_POST["filename"]) ? $_POST["filename"] : null;

	if ( strpos( $filename , '.md' ) !== false ) {
		$filename = "../../" . $filename;
		
		if ( @$myfile = fopen(  $filename , "w") ) {
			$txt = $mdcontent . "\n";
			if ( fwrite($myfile, $txt) ) {
				echo json_encode( array( "success" => true , "message" => "File saved!" ) );
				return false;
			}
			
		} else {
			echo json_encode( array( "success" => false , "message" => "Permission Denied!" ) );
			return false;
		}
		
		fclose($myfile);

		return false;
	}

}

echo json_encode( array( "success" => false ) );


?>