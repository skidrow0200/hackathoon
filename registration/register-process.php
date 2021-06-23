<?php


$link = new mysqli("localhost","root","0656811644messi.","hackathon_db");
// error variable

$error = array();

// storing the value on the variables

$fullName = $_POST['fullName'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$salt = "hackathoon";
$pass_encryption = sha1($pass.$salt);
$choices = $_POST['choices'];
$teamName = $_POST['teamName']; 
$captinName = $_POST['captinName'];
$organization = $_POST['organization'];
$teamMembers = $_POST['teamMembers'];  

if (empty($error)) {
	require ('mysql_connect.php');


	// make a query

$e = "SELECT email FROM user WHERE email = '$email' ";
$ee = mysqli_query($link,$e);


if(mysqli_num_rows($ee) > 0){
	$error['e'] = "Электронная почта использована";
	return false;
	die();
}


$t = "SELECT teamName FROM user WHERE teamName = '$teamName' ";
$tt = mysqli_query($link,$t);


if(mysqli_num_rows($tt) > 4){
	$error['t'] = "Команда заполнена";
	return false;
	die();
}

	// bind values
	if(!is_null($organization && $teamMembers && $fullName)){
			$query = "INSERT INTO user (userID, fullName, telNumber, email, password, selectedSubject, teamName, captinName, organization, teamMembers, registerDate)";
			$query .= "VALUES ('', ?,?,?,?,?,?,?,?,?,NOW())";

			// initialize statememt

			$q = mysqli_stmt_init($con);

			// prepare sql statment

			mysqli_stmt_prepare($q, $query);
			mysqli_stmt_bind_param($q,'sssssssss',$fullName,$tel, $email, $pass_encryption, $choices, $teamName, $captinName, $organization, $teamMembers);
			
			// execute statement

			mysqli_stmt_execute($q);

			if (mysqli_stmt_affected_rows($q) == 1) {
						header('location:success.php');
						exit();
					}

			}

		elseif (!is_null($organization && $fullName)) {

			$query = "INSERT INTO user (userID, fullName, telNumber, email, password, selectedSubject, teamName, captinName, organization, teamMembers, registerDate)";
			$query .= "VALUES ('', ?,?,?,?,?,?,?,?,NOW())";

			// initialize statememt

			$q = mysqli_stmt_init($con);

			// prepare sql statment

			mysqli_stmt_prepare($q, $query);
			mysqli_stmt_bind_param($q, 'ssssssss',$fullName,$tel, $email, $pass_encryption, $choices, $teamName, $captinName, $organization);
						// execute statement

			mysqli_stmt_execute($q);

			if (mysqli_stmt_affected_rows($q) == 1) {
						header('location:success.php');
						exit();
					}

			
			}
			elseif (!is_null($teamMembers && $fullName)) {

			$query = "INSERT INTO user (userID, fullName, telNumber, email, password, selectedSubject, teamName, captinName, organization, teamMembers, registerDate)";
			$query .= "VALUES ('', ?,?,?,?,?,?,?,NOW())";

			// initialize statememt

			$q = mysqli_stmt_init($con);

			// prepare sql statment

			mysqli_stmt_prepare($q, $query);
			mysqli_stmt_bind_param($q,'ssssssss',$fullName,$tel, $email, $pass_encryption, $choices, $teamName, $captinName, $teamMembers);
						// execute statement

			mysqli_stmt_execute($q);
				if (mysqli_stmt_affected_rows($q) == 1) {
						header('location:success.php');
						exit();
					}
			
			}




}

?>