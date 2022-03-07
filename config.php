<?php
	//ob_start();
	error_reporting(0);
	session_start();

	/* DATABASE CONFIGURATION */
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_DATABASE', 'justiceproperties');
	define('DB_PASSWORD', '');
	define("BASE_URL", "http://localhost/JusticeProperties.com/");

	define('PRO_PayPal', 0);

	// Configuration for Live Paypal Transactions
	if(PRO_PayPal){
		define("PayPal_CLIENT_ID", "#########################");
		define("PayPal_SECRET", "###################");
		define("PayPal_BASE_URL", "https://api.paypal.com/v1/");
	}

	// configurations for sandbox Transactions
	else{
		define("PayPal_CLIENT_ID", "###########################################");
		define("PayPal_SECRET", "#################################################");
		define("PayPal_BASE_URL", "https://api-m.sandbox.paypal.com/v1/");
	}


	// database Connection to the system 

	function getdbConnection() 
	{
		$dbhost=DB_SERVER;
		$dbuser=DB_USERNAME;
		$dbpass=DB_PASSWORD;
		$dbname=DB_DATABASE;
		$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
		$dbConnection->exec("set names utf8");
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbConnection;
	}
?>
