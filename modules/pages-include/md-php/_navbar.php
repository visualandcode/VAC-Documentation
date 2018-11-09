<?php  


// * [Homepage](http://kct.libdocs/homepage/)

// * Frameworks Documentations
// 	* [ws-frameworks v1.0](http://kct.libdocs/v1/)
// 	* [ws-frameworks v2.0](http://kct.libdocs/v2/)
// 	* [ws-frameworks v3.0](http://kct.libdocs/v3/)
// 	* [ws-frameworks v4.0](http://kct.libdocs/v4/)

// * Knowledge
// 	* [Django-Dev](http://kct.libdocs/python)

// * [Logout](http://kct.libdocs/logout)


$db 	 = new Libs\DB();
$request = new Libs\Request();

$host 	 = $request->base_uri();

$selectusers = $db->query("
	SELECT a.* , b.sp_accessmodules FROM sys_users a 
	INNER JOIN sys_privileges b on a.su_privilegeid=b.sp_pid
	WHERE
	a.su_id='".$request->getsession("su_id")."'
");


$users = $selectusers->fetchOne();
$accessmodules = '';
if ( !$selectusers->error ) {
	$accessmodules = $users['sp_accessmodules'];	
}




// get modules by ID
/**
 * [modules description]
 * @param  [type] $menuid [description]
 * @return [type]         [description]
 */
function modules ( $menuid = null ) {
	global $db , $request , $accessmodules;
	if ( !is_null( $menuid ) ) {

		$selectmodules = $db->query("SELECT * FROM sys_modules a WHERE a.sm_active=1 
			AND a.sm_smn_menuid='$menuid'
			AND a.sm_id in(".$accessmodules.")");
		
		$modulesarr    = $selectmodules->fetchArray();


		if ( !$selectmodules->error ) {
			if ( count($modulesarr) > 0 ) {
				return $modulesarr;
			}
		}
	}

	return false;
}

$selectmenu = $db->query("SELECT * FROM sys_menu a WHERE a.smn_active=1");
$menuarr    = $selectmenu->fetchArray();
if ( !$selectmenu->error ) {
	foreach ( $menuarr as $keymn => $valmn ) {
		if ( !empty($valmn['smn_link']) ) {
			$link = $host . "/" . $valmn['smn_link'];
			echo "* [<i class='fa fa-". $valmn['smn_icon'] ."'></i> &nbsp;".$valmn['smn_menuname']."]($link) \n";	
		} else {
			$modules = modules($valmn['smn_menuid']);
			if ( $modules ) {
				echo "* <i class='fa fa-". $valmn['smn_icon'] ."'></i> &nbsp;".$valmn['smn_menuname']." \n";		
				foreach ( $modules as $keym => $valm ) {
					$link = $host . "/" . $valm['sm_modulepath'];
					echo "\t * [<i class='fa fa-angle-right'></i> &nbsp;".$valm['sm_modulename']."]($link) \n";	
				}
			}
		}
	}		



}

?>
