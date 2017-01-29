<?php

function connDB(){
	//$referer = $_SERVER['REQUEST_URI'];

	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "Contact";

	// Create connection
	//$conn = new mysqli($servername, $username, $password, $dbname);
	
	
	$link =mysql_connect($servername, $username, $password) or die('FU!');
	mysql_select_db($dbname);
	//header("Location: $referer");
	
}

?>