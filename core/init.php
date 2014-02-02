<?php
session_start();
/** 
 * global constants and variables
 * global state array - these are the names of the states our 
 * web app can be throughout the program
 */
$FB_STATE = array(
					'register_process' => 'register_process',//uesr registers
					'registered'       => 'registered',		 //user is already registered
					'login_process'    => 'login_process',	 //user submits the login button
					'logged_in'        => 'logged_in',		 //user is successfully logged in
					'logout'           => 'logout',			 //user submits the logout button (star top right)
					'logged_out'       => 'logged_out'		 //user is logged out successfully and all sessions are unset and destroyed
				);

/** 
 * create a place to store our error strings
 */
$FB_ERROR = array();

/** 
 * sanitize our input text
 * @method sanitize_and_check
 * @param String $val string typed in by user
 * @return if is OK, return the cleaned string, otherwise false
 */
function sanitize_and_check($val) {
	$val = filter_var($val, FILTER_SANITIZE_STRING);  
	
	if(!empty($val)) {
		return $val;
	}
	return false;
}
		
/** 
 * initialize our classes
 */
require_once('classes/MODEL.php');

if(!class_exists('MODEL')) {
	echo "YOUR CLASS MODEL DID NOT LOAD";
	exit;
}
	
/** 
 * get our current state
 */

if(isset($_GET['state'])) {
	$state = $_GET['state'];
}

if(!isset($_SESSION['FB_STATE'])) {
	$_SESSION['FB_STATE'] = $FB_STATE['logged_out'];
}

switch($state) {		
	case $FB_STATE['register_process']:
		$first_name = sanitize_and_check($_POST['first-name']);
		$last_name  = sanitize_and_check($_POST['last-name']);
		$email		= sanitize_and_check($_POST['new-email']);
		$password   = sanitize_and_check($_POST['password']);
		$b_day		= sanitize_and_check($_POST['b-day']);
		$b_month	= sanitize_and_check($_POST['b-month']);
		$b_year		= sanitize_and_check($_POST['b-year']);
		$sex		= sanitize_and_check($_POST['sex']);
		$_SESSION['FB_STATE'] = $FB_STATE['register_process'];
		
		if( $first_name	!= false && 
			$last_name	!= false && 
			$email		!= false && 
			$password	!= false && 
			$b_day		!= false && 
			$b_month	!= false && 
			$b_year		!= false && 
			$sex		!= false
		  ) {
			require_once('core/classes/REGISTRATION_PROCESS.php');
			
			$FB_ERROR['INIT'][] =  "first_name = $first_name, 
									last_name = $last_name, 
									email = $email, 
									password = $password,
									b_day = $b_day,
									b_month = $b_month,
									b_year = $b_year,
									sex = $sex
									";
			
			if(class_exists('REGISTRATION_PROCESS')) {
				$reg = new REGISTRATION_PROCESS();
				$result = $reg->process_registration($first_name, $last_name, $email, $password, $b_day, $b_month, $b_year, $sex, $FB_ERROR);
				if($result === false) {
					$FB_ERROR['INIT'][] = "FAILED TO REGISTER";
				} else {
					$state = $FB_STATE['registered'];
					$_SESSION['FB_STATE'] = $FB_STATE['registered'];
					$FB_ERROR['INIT'][] = "REGISTRATION SUCCESSFUL";
				}
			}
		} else {
			$FB_ERROR['INIT'][] = "FIELDS NOT FILLED OUT 
									first_name=$first_name, 
									last_name=$last_name, 
									email=$email, 
									password=$password,
									b_day=$b_day,
									b_month=$b_month,
									b_year=$b_year,
									sex=$sex
									";
		}
		break;
			
	case $FB_STATE['registered']:	//registered, nothing else true
		break;
			
	case $FB_STATE['login_process']:
		require_once('core/classes/LOGIN_PROCESS.php');
		
		if(class_exists('LOGIN_PROCESS')) {
			$email		= sanitize_and_check($_POST['email']);
			$password   = sanitize_and_check($_POST['pass']);

			$log = new LOGIN_PROCESS();
			$result = $log->process_login($email, $password, $FB_ERROR);
			
			if($result === false) {
				$state = $FB_STATE['logout'];
				$_SESSION['FB_STATE'] = $FB_STATE['logout'];
				$FB_ERROR['INIT'][] = "FAILED TO LOG IN";
			} else {
				$state = $FB_STATE['logged_in'];
				$_SESSION['FB_STATE'] = $FB_STATE['logged_in'];
				$FB_ERROR['INIT'][] = "SUCCESSFUL LOGIN";
			}
		}
		break;
			
	case $FB_STATE['logout']:
		session_start();
		session_unset();
		session_destroy();
		session_write_close();
		setcookie(session_name(),'',0,'/');
		session_regenerate_id(true);
		$state = $_SESSION['logout'];
		$_SESSION['FB_STATE'] = $FB_STATE['logged_out'];
		header("Location: index.php");
		break;
			
	case $FB_STATE['logged_out']:
		$state = $_SESSION['logged_out'];
		$_SESSION['FB_STATE'] = $FB_STATE['logged_out'];
		break;
			
	default:
		break;
		
} //end state switch

//SESSION STATE
switch($_SESSION['FB_STATE']) {
	
	case $FB_STATE['register_process']:
		$c_first_name	= $_SESSION['contacts_info']['first_name'];
		$c_last_name	= $_SESSION['contacts_info']['last_name'];
		$c_email 		= $_SESSION['contacts_info']['email'];
		break;
	case $FB_STATE['registered']:
		$c_first_name	= $_SESSION['contacts_info']['first_name'];
		$c_last_name	= $_SESSION['contacts_info']['last_name'];
		$c_email 		= $_SESSION['contacts_info']['email'];
		break;
	
	case $FB_STATE['logged_in']:
		/*
		require_once('core/classes/LOGIN_PROCESS.php');
		if(class_exists('LOGIN_PROCESS')) {
			$log = new LOGIN_PROCESS();
			$result = $log->is_already_logged_in();
		}
		*/
		$c_id			= $_SESSION['contacts_info']['id'];
		$c_first_name	= $_SESSION['contacts_info']['first_name'];
		$c_last_name	= $_SESSION['contacts_info']['last_name'];
		$c_email 		= $_SESSION['contacts_info']['email'];
		$c_password 	= $_SESSION['contacts_info']['password'];
		$c_b_day 		= $_SESSION['contacts_info']['b_day'];
		$c_b_month		= $_SESSION['contacts_info']['b_month'];
		$c_b_year		= $_SESSION['contacts_info']['b_year'];
		$c_sex			= $_SESSION['contacts_info']['sex'];
		break;
			
	default:
		break;
		
} //end session state switch


/**
 * branch based on current state
 */
$FB_ERROR['INIT'][] = "Current state is ".$state;
$FB_ERROR['INIT'][] = "Session state is ".$_SESSION['FB_STATE'];

?>

