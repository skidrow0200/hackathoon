<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$user = getById("user", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New User</legend>
						<input name="cat" type="hidden" value="user">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Full Name</label>
							<input class="form-control" type="text" name="fullName" value="<?=$user['fullName']?>" /><br>
							
							<label>Phone Number</label>
							<input class="form-control" type="text" name="telNumber" value="<?=$user['telNumber']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$user['email']?>" /><br>
							
							<label>Selected Subject</label>
							
							<select class="form-control" type="text" name="selectedSubject" value="<?=$user['selectedSubject']?>">
										<option selected="selected" disabled="yes">Направление*</option>
										<option name="choice1">Информационная Безопасность</option>
										<option name="choice2">Искусственный интеллект и машинное обучение</option>
										<option name="choice3">Разработка программного обеспечения</option>
							</select><br>
							
							<label>Team Name</label>
							<input class="form-control" type="text" name="teamName" value="<?=$user['teamName']?>" /><br>
							
							<label>Captin Name</label>
							<input class="form-control" type="text" name="captinName" value="<?=$user['captinName']?>" /><br>
							
							<label>Organization</label>
							<input class="form-control" type="text" name="organization" value="<?=$user['organization']?>" /><br>
							
							<label>Team Members</label>
							<input class="form-control" type="text" name="teamMembers" value="<?=$user['teamMembers']?>" /><br>
							
							
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				