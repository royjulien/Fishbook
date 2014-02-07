<?php

/** 
 * Base class for manipulating database (Model) data
 * NOTE: comments made compatible with PHPDocumentator
 * http://www.phpdoc.org/
 */
class MODEL {
	
	private static $mysql_hostname    = 'localhost';
	private static $mysql_db_name     = 'DB_name';
	private static $mysql_username    = 'DB_usr';
	private static $mysql_password    = 'DB_pass';
	
	//storage for our database object
	private static $db                = NULL;
	
	//these variables store whether we have the capability to 
	//run the various types of database connections PHP offers
	//to mysql
	private static $HAS_DBO           = false;
	private static $HAS_MYSQLI        = false;
	
	//these variables define the kind of connection I currently have open
	private static $IS_DBO            = 1000;
	private static $IS_MYSQLI         = 1001;
	private static $CURR_CONN_TYPE    = NULL;
	
	//once we've connected, we have to keep track of 	
	
	/** 
	 * constructor
	 * NOTE: we have to go parent::__construct to make the 
	 * parent class constructor (this one) fire in our derived 
	 * classes (e.g. LOGIN_PROCESS.php, REGISTRATION_PROCESS.php
	 */
	public function __construct() {
		if (defined('PDO::ATTR_DRIVER_NAME')) {
			self::$HAS_DBO = true;
		}
		if (function_exists('mysqli_connect')) {
			self::$HAS_MYSQLI = true;
		}
	}
	
	/** 
	 * @method db_connect();
	 * connect using PDO or MYSQLI, store the resulting 
	 * database object in the class
	 * @return Boolean if connected, return true, else return false
	 * connect to the database
	 */
	public function db_connect() {
		if(self::$HAS_DBO) {
			return db_connect_pdo();
		} else if(self::$HAS_MYSQLI) {
			return db_connect_mysqli();
		} else {
			return false;
		}
	}
	
	/**
	 * @method db_connect_pdo()
	 * connect using pdo objects
	 * @return Boolean if we connect, return true, else return false
	 * PDO databases
	 */
	public function db_connect_pdo() {
		//self::$CURR_CONN_TYPE = self::$IS_DBO;
		return false;
	}

	/** 
	 * @method db_connect_mysqli()
	 * connect using mysqli
	 * @return Boolean if we connect, return true, else return false
	 * MYSQLI(hostname, username, password, database)
	 */
	public function db_connect_mysqli() {
		if(!self::is_connected()) {
			self::$db = new MySQLi(self::$mysql_hostname, self::$mysql_username, self::$mysql_password, self::$mysql_db_name);
		
			//if we connect, we should have a valid $db
			if(mysqli_connect_errno()) {
				echo "ERROR: Could not connect to database using MySQLi";
				self::$db = NULL;
				return false;
			} else {
				self::$CURR_CONN_TYPE = self::$IS_MYSQLI;
				return true;
			}
		}
		return true;
	}
	
	/** 
	 * @method db_disconnect()
	 * disconned from a database server, using either
	 * MySQLi or PDO
	 * @return Boolean if disconnected return true, else return false
	 */
	public function db_disconnect() {
		if(self::$HAS_DBO) {
			return db_disconnect_pdo();
		} else if(self::$HAS_MYSQLI) {
			return db_disconnect_mysqli();
		} else {
			return false;
		}
	}
	
	/** 
	 * @method db_disconnect_pdo()
	 * disconnect from a database PDO connection
	 * @return Boolean if true, we disconnected
	 */
	private function db_disconnect_pdo() {
		self::$CURR_CONN_TYPE = NULL;
		return false;
	}
	
	/** 
	 * @method db_disconnect_mysqli()
	 * disconnect from a database mysqli connection
	 * @return Boolean if true, we disconnected
	 */	
	private function db_disconnect_mysqli() {
		if(self::is_connected()) {
			self::$db->close();
			self::$CURR_CONN_TYPE = NULL;
			return true;
		} else {
			return false;
		}
	}
	
	/** 
	 * @method is_connected()
	 * check if we have a database object initialized
	 * @return Boolean if true, we disconnected
	 */
	public function is_connected() {
		if(self::$db !== NULL) {
			return true;
		} else {
			return false;
		}
	}
	
	/** 
	 * run a select query
	 */
	public function run_select_query($query_string, &$ERR_ARR) {
		$result = NULL;

		if(self::is_connected() == true) {	
			//TODO: WRITE THE PDO VERSION HERE
			//!!!!!!!!!!!!!!!!!!!!!!
			
			//echo "I'm in self is_connected..... and self::has_mysqli is".self::$HAS_MYSQLI;	
			
			if(self::$HAS_MYSQLI) {
				//echo "I'm about to run a mysqli query";
				
				$ERR_ARR[__METHOD__][] = "trying to run db->query";
				$result = self::$db->query($query_string);
				if($result) {
    				//convert the result to a PHP array. The $result 
					//variable is an object with methods that let 
					//us fetch individual rows (arrays) from the 
					//database matching our query
					$result_arr = array();
					
					while ($row = $result->fetch_assoc()) {
						$result_arr[$row['id']] = $row;
						$_SESSION['contacts_info'] = $row;
    				}
					return $result_arr;
				} else {
					$ERR_ARR[__METHOD__][] = "db->error is ".self::$db->error;
					return false;
				}
			} else {
				$ERR_ARR[__METHOD__][] = "don't have any database connector defined";
			}
		}
	}
	
	/** 
	 * run an insert query
	 * @param {String} $query_string query string for database
	 * @param {Array} $ERR_ARR array for collecting status and error 
	 * messages (passed by reference)
	 */
	public function run_insert_query($query_string, &$ERR_ARR) {
		$result = NULL;
		
		if(self::is_connected() == true) {
			
			//SINCE WE HAVE $HAS_DBO on out system, BUT we connected via
			//mysqli, if we use this now, we would have to have saved the 
			//connection type currently being used. So, until we get 
			//DBO working, comment this out!!!!!!!!!!!!!
			//if(self::$HAS_DBO)
			///{
			///	echo "ooops I'm inside has_dbo, has";
			///}
			
			if(self::$HAS_MYSQLI) {
				$ERR_ARR[__METHOD__][] = "trying to run db->query";
				$result = self::$db->query($query_string);
				$ERR_ARR[__METHOD__][] = "RESULT IS $result ";
				
				if($result) {
    				//error is in $db->error;
					return true;
				} else {
					$ERR_ARR[__METHOD__][] = "db->error is ".self::$db->error;
					return false;
				}
			} else {
				$ERR_ARR[__METHOD__][] = "don't have any database connector defined";
			}
		} else {
			$ERR_ARR[__METHOD__][] = "oops I have not connected yet";
		}
		return false;
	}
};
