<?php  

use Libs\Request as Request,
	Libs\DB as DB;

$request = new Request();
$db 	 = new DB();

$username = $request->get('username');
$password = $request->get('password' , 'md5');

if ( $request->isPost() ) {

	if ( $username != false && $password != false) {
		
		$selectusers = $db->query("
				SELECT a.* , b.sp_accessmodules FROM sys_users a 
				INNER JOIN sys_privileges b on a.su_privilegeid=b.sp_pid
				WHERE
				a.su_email='$username' AND 
				a.su_passwd='$password' 
		");
		
		$fetchuser = $selectusers->fetchOne();

		if ( !$selectusers->error ) {
			$_SESSION['su_email'] 		  = $fetchuser['su_email'];
			$_SESSION['su_id']    		  = $fetchuser['su_id'];
			$_SESSION['su_fullname']      = $fetchuser['su_fullname'];
			$_SESSION['su_privilegeid']   = $fetchuser['su_privilegeid'];

			$modulesid 	   = $fetchuser['sp_accessmodules'];
			$selectmodules = $db->query("
				SELECT group_concat(a.sm_modulepath) as modulepath
				FROM sys_modules a 
				WHERE a.sm_id in(".$modulesid.") ");
			$modulespath   = $selectmodules->fetchOne();


			$selectmenus = $db->query("
				SELECT group_concat(a.smn_menuname) as menulink
				FROM sys_menu a 
				WHERE a.smn_link IS NOT NULL");
			$menupath      = $selectmenus->fetchOne();



			if ( !$selectmodules->error && !$selectmenus->error ) {
				$combinpathandmenu = $modulespath['modulepath'] . "," . $menupath['menulink'];
				$_SESSION['modulepath'] = $combinpathandmenu;
			}

			$_SESSION['sp_accessmodules'] = $modulesid;


			$request->resjson(array(
				"msg" => 'LoggedIn! , Welcome ' . $fetchuser['su_fullname'] . "!"
			));

		} else {
			$request->resjson(array(
				"msg" => 'Error'
			));
		}


	}  else {
		$request->resjson(array(
			'msg' => "Not allow to SQL Injection."
		));
	}
}

?>