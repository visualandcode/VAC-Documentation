<?php  


class Users extends \Libs\DB {

	public function _init () {
		$this->request = new \Libs\Request();
	}

	/**
	 * [findAll description]
	 * @return [type] [description]
	 */
	public function findAll () {
		$query = $this->query("SELECT a.su_id , 
									  a.su_privilegeid , 
									  a.su_email , 
									  a.su_fullname ,
									  b.sp_privilegename
							   FROM sys_users a
							   INNER JOIN sys_privileges b on b.sp_pid=a.su_privilegeid
							   WHERE su_active=1
							   ORDER BY a.su_privilegeid");
		$result = $query->fetchArray();
		if ( !$query->error ) {
			$this->request->resjson(array( 'result' => $result));
		}
	}

	/**
	 * [get description]
	 * @return [type] [description]
	 */
	public function get () {
		$userid = $this->request->get("uid");
		if ( !empty($userid) ) {
			$selectuser = $this->query("SELECT a.su_id , 
									  a.su_privilegeid , 
									  a.su_email , 
									  a.su_active , 
									  a.su_fullname ,
									  b.sp_privilegename
							   FROM sys_users a
							   INNER JOIN sys_privileges b on b.sp_pid=a.su_privilegeid
							   WHERE a.su_id='$userid'");
			$result = $selectuser->fetchArray();
			if ( !$selectuser->error ) {
				$this->request->resjson(array(
					"result" => $result
				));
			}
		}
	}

	/**
	 * [update description]
	 * @return [type] [description]
	 */
	public function update () {

	}

	/**
	 * [create description]
	 * @return [type] [description]
	 */
	public function create () {

	}

	/**
	 * [create description]
	 * @return [type] [description]
	 */
	public function view () {

	}

	/**
	 * [create description]
	 * @return [type] [description]
	 */
	public function delete () {

	}

}



?>