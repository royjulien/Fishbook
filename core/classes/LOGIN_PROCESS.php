<?php 

class LOGIN_PROCESS extends MODEL {
	
	public function __construct() {
		//WE have to instantiate the parent class via 
		//the parent class constructor (MODEL.PHP)
		parent::__construct();
	}
	
	public function is_already_logged_in() {
		
		//$c_info;
		/*
		foreach($_SESSION['contacts_info']->$key as $value) {
			$this->$key = $value;
		}
		
		$c_info = array(
						"id" => $c_id, 
						"first_name" => $c_first_name, 
						"last_name" => $c_last_name, 
						"email" => $c_email, 
						"password" => $c_password, 
						"b_day" => $c_b_day, 
						"b_month" => $c_b_month, 
						"b_year" => $c_b_year, 
						"sex" => $c_sex
						);
		
		return $c_info;
		*/
	}
	
	/** 
	 * check to see if user has correct login info
	 */
	public function process_login($email, $password, &$ERR_ARR) {
		
		if(self::db_connect_pdo()) {
			$ERR_ARR[__METHOD__][] = "Connected to database via PDO";
		} else if(self::db_connect_mysqli()) {
			$ERR_ARR[__METHOD__][] = "Connected to database via MySQLi";

			//now, run the query. Since we are doing a 'select', we should 
			//return zero or more database records
			$query_string = "SELECT * FROM contacts WHERE email='$email' AND password='$password'";
					
			if($res = self::run_select_query($query_string, $ERR_ARR)) {
				$ERR_ARR[__METHOD__][] = "Query ran successfully ";
				return true;
			} else {
				$ERR_ARR[__METHOD__][] = "Query failed to run";
			}
		} else {
			$ERR_ARR[__METHOD__][] = "Failed to connect to the database";
		}
		$ERR_ARR[__METHOD__][] = "I HAVEN'T WRITTEN MY CODE YET!";
		return false;
	}
	
	public function logout() {
		return false;
	}
};