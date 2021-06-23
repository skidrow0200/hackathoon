<?php
session_start();
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "hackathon_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$pass = $_POST["pass"];
$email = mysqli_real_escape_string($conn,$email);
$pass = mysqli_real_escape_string($conn,$pass);
$salt = "hackathoon";
$pass_encryption = sha1($pass.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from user WHERE email = '".$email."' and 
	password = '".$pass_encryption."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){

	include "lk.php";
	
	
}
else{
	$_SESSION['errors'] = array("Неверный Email или Пароль!");
	sleep(1);
	header("Location:login.php");

}








?>