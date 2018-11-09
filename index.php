<?php  

session_start();
require_once("vendor/autoload.php"); // autoloader 

$requests = new Libs\Request();
$uri 	  = $requests->uri();
$baseUri  = $requests->base_uri();

$RouteController = new Libs\RouteController();
$RouteController->reg(array(
	"settings"
));


// route to login
if ( $uri == 'login' ) {
	if ( $requests->getsession('su_fullname') && $requests->getsession('su_id') ) {
		header("Location: /homepage/ "); /* Redirect browser */
	} else {
		require_once('modules/pages-include/auth-action-page.php');
	}
}

// route to login
if ( $uri == 'logout' ) {
	session_destroy();
	header("Location: /login/ "); /* Redirect browser */
}

/**
 * Login session
 */
if ( !$requests->getsession('su_fullname') && !$requests->getsession('su_id') ) {
	require_once('modules/pages-include/index-page.php'); // login page
} else {
	if ( empty($uri) ) {
		header("Location: /homepage/#/md/homepage/index "); /* Redirect browser */
	} else {

		// check if dir modules is found
		if ( is_dir( 'modules' . '/' . $uri ) ) 
		{
			$dir = 'modules' . '/' . $uri . '/';

			if ( file_exists( $dir . 'index-page.php') ) 
			{
				$indexfile = $dir . 'index-page.php';
				require_once($indexfile);
				require_once('modules/pages-include/md-php/_modal-md-editor.php'); // md modal editor
			}
		}

		// includer markdown routing.
		if ( strpos( $uri , "_navbar.md" ) !== false  ) {
			require_once( 'modules/pages-include/md-php/_navbar.php' );
		} else  {
			$filemd = $dir = 'modules/' . $uri;
			if ( file_exists( $filemd ) ) {
				if ( strpos( $uri , ".md" ) !== false || strpos( $uri , ".html" ) !== false ) {
					$files = file_get_contents($filemd);
					echo $files;	
				}
			}
		} 



	}
}


?>