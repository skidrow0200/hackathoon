<?php

define('DB_NAME' , 'hackathon_db');
define('DB_USER', 'root');
define('DB_PASSWORD', ''); //RsueHackathon2021$--$
define('DB_HOST', 'localhost');

try{
	// connection variable
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	// encoded language
	mysqli_set_charset($conn,'utf8');

}catch (Exception $ex){
	print "An Exception occured. Message: ".$ex->getMessage();
}



?>