	<?php 
			include "mysql_connect.php";
			
		?>

<!DOCTYPE html>
<html>
<head>
	<title>Личный кабинет</title>


	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style3.css">

<a href="..\index.html" class="btn">Вернуться на главную страницу</a>

</head>

<body>

<div class="container" id="container">

	<h1>Личный кабинет</h1>
    
	<div class= "container_name">

			<div class = "data"> <text style="color:black">ФИО:</text>
				<?php $sql7 = mysqli_query($conn, "SELECT fullName from user WHERE email = '".$email."' and 
					password = '".$pass_encryption."'"); 
					$data7 = mysqli_fetch_assoc($sql7); 
					echo $data7['fullName']; echo "<br>"; ?> </div> </div>

	<div class = "container_tel">
	 <div class = "data"> <text style="color:black">Номер телефона:</text>
	 	<?php $sql7 = mysqli_query($conn, "SELECT telNumber from user WHERE email = '".$email."' and 
					password = '".$pass_encryption."'"); 
					$data7 = mysqli_fetch_assoc($sql7); 
					echo $data7['telNumber']; echo "<br>"; ?> </div> </div>

   <div class = "container_email">
	 <div class = "data"> <text style="color:black">Почта:</text>
	 	<?php $sql7 = mysqli_query($conn, "SELECT email from user WHERE email = '".$email."' and 
					password = '".$pass_encryption."'"); 
					$data7 = mysqli_fetch_assoc($sql7); 
					echo $data7['email']; echo "<br>"; ?> </div> </div>

	<div class = "container_subj">
	 <div class = "data"> <text style="color:black">Направление:</text>
	 	<?php $sql7 = mysqli_query($conn, "SELECT selectedSubject from user WHERE email = '".$email."' and 
					password = '".$pass_encryption."'"); 
					$data7 = mysqli_fetch_assoc($sql7); 
					echo $data7['selectedSubject']; echo "<br>"; ?> </div> </div>

	<div class = "container_team">
	 <div class = "data"> <text style="color:black">Название команды:</text>
	 	<?php $sql7 = mysqli_query($conn, "SELECT teamName from user WHERE email = '".$email."' and 
					password = '".$pass_encryption."'"); 
					$data7 = mysqli_fetch_assoc($sql7); 
					echo $data7['teamName']; echo "<br>"; ?> </div> </div>

	<div class = "container_org">
	 <div class = "data"> <text style="color:black">Организация:</text>
	 	<?php $sql7 = mysqli_query($conn, "SELECT organization from user WHERE email = '".$email."' and 
					password = '".$pass_encryption."'"); 
					$data7 = mysqli_fetch_assoc($sql7); 
					echo $data7['organization']; echo "<br>"; ?> </div> </div>

		<a href="update.php" class="btn1">Сменить команду</a>	
					


</body>
</html>





