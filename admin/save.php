<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "admin_accounts" || $cat_get == "admin_accounts") {
					$user_name = addslashes(htmlentities($_POST["user_name"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$series_id = addslashes(htmlentities($_POST["series_id"], ENT_QUOTES));
$remember_token = addslashes(htmlentities($_POST["remember_token"], ENT_QUOTES));
$expires = addslashes(htmlentities($_POST["expires"], ENT_QUOTES));
$admin_type = addslashes(htmlentities($_POST["admin_type"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `admin_accounts` (  `user_name` , `password` , `series_id` , `remember_token` , `expires` , `admin_type` ) VALUES ( '".$user_name."' , '".md5($password)."', '".$series_id."' , '".$remember_token."' , '".$expires."' , '".$admin_type."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `admin_accounts` SET  `user_name` =  '".$user_name."' , `series_id` =  '".$series_id."' , `remember_token` =  '".$remember_token."' , `expires` =  '".$expires."' , `admin_type` =  '".$admin_type."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `admin_accounts` WHERE id = '".$id_get."' ");
					}
					header("location:"."admin_accounts.php");
				}

				if($cat == "cases" || $cat_get == "cases") {
					$caseTitle = addslashes(htmlentities($_POST["caseTitle"], ENT_QUOTES));
					$caseDescription = addslashes(htmlentities($_POST["caseDescription"], ENT_QUOTES));
					$user_id = addslashes(htmlentities($_POST["user_id"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `cases` ( `user_id` , `caseTitle` , `caseDescription` ) VALUES (   '".$user_id."' ,'".$caseTitle."' , '".$caseDescription."') ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `cases` SET  `caseTitle` =  '".$caseTitle."' , `caseDescription` =  '".$caseDescription."' , `user_id` =  '".$user_id."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `cases` WHERE id = '".$id_get."' ");
					}
					header("location:"."cases.php");
				}
				
				if($cat == "user" || $cat_get == "user") {
					$userID = addslashes(htmlentities($_POST["userID"], ENT_QUOTES));
$fullName = addslashes(htmlentities($_POST["fullName"], ENT_QUOTES));
$telNumber = addslashes(htmlentities($_POST["telNumber"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$selectedSubject = addslashes(htmlentities($_POST["selectedSubject"], ENT_QUOTES));
$teamName = addslashes(htmlentities($_POST["teamName"], ENT_QUOTES));
$captinName = addslashes(htmlentities($_POST["captinName"], ENT_QUOTES));
$organization = addslashes(htmlentities($_POST["organization"], ENT_QUOTES));
$teamMembers = addslashes(htmlentities($_POST["teamMembers"], ENT_QUOTES));
$registerDate = addslashes(htmlentities($_POST["registerDate"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `user` (  `userID` , `fullName` , `telNumber` , `email` , `selectedSubject` , `teamName` , `captinName` , `organization` , `teamMembers` , `registerDate` ) VALUES ( '".$userID."' , '".$fullName."' , '".$telNumber."' , '".$email."' , '".$selectedSubject."' , '".$teamName."' , '".$captinName."' , '".$organization."' , '".$teamMembers."' , '".$registerDate."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `user` SET  `userID` =  '".$userID."' , `fullName` =  '".$fullName."' , `telNumber` =  '".$telNumber."' , `email` =  '".$email."' , `selectedSubject` =  '".$selectedSubject."' , `teamName` =  '".$teamName."' , `captinName` =  '".$captinName."' , `organization` =  '".$organization."' , `teamMembers` =  '".$teamMembers."' , `registerDate` =  '".$registerDate."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `user` WHERE id = '".$id_get."' ");
					}
					header("location:"."user.php");
				}
				
				if($cat == "users" || $cat_get == "users") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>