<?php 


class REGISTRATION_PROCESS extends MODEL {
	
	public function __construct() {
		//WE have to instantate the parent class via 
		//the parent class constructor (MODEL.PHP)
		parent::__construct();
	}
	
	/** 
	 * is already registered
	 */
	public function is_already_registered($email, $password) {
		return false;
	}
	
	public function process_registration($first_name, $last_name, $email, $password, $b_day, $b_month, $b_year, $sex, $FB_ERROR) {
		//connect to the function db_connect_mysqli, which is 
		//defined in our BASE CLASS = MODEL.php
		if(self::db_connect_pdo()) {
			$ERR_ARR[__METHOD__][] = "Connected to database via PDO";
		} else if(self::db_connect_mysqli()) {
			$ERR_ARR[__METHOD__][] = "Connected to database via MySQLi";
			//process the registration, insert into mysql database
			$query_string = "INSERT INTO contacts (first_name, last_name, email, password, b_day, b_month, b_year, sex) VALUES('$first_name', '$last_name', '$email', '$password', '$b_day', '$b_month', '$b_year', '$sex')";
			//run the mysql command to insert
			if(self::run_insert_query($query_string, $ERR_ARR)) {
				$ERR_ARR[__METHOD__][] = "Query ran successfully";
				return true;
			} else {
				$ERR_ARR[__METHOD__][] = "Query failed to run";
			}
		} else {
			$ERR_ARR[__METHOD__][] = "Failed to connect to the database";
		}
		$ERR_ARR[__METHOD__][] = "I HAVEN'T FINISHED MY CODE YET!";
		return false;
	}

	public function de_register() {
		return false;
	}
};