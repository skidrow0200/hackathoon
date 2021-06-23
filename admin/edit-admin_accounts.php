<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$admin_accounts = getById("admin_accounts", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Admin_accounts</legend>
						<input name="cat" type="hidden" value="admin_accounts">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>User name</label>
							<input class="form-control" type="text" name="user_name" value="<?=$admin_accounts['user_name']?>" /><br>
							
							<label>Password</label>
							<input class="form-control" type="text" name="password" value="<?=$admin_accounts['password']?>" /><br>
							
							<label>Series id</label>
							<input class="form-control" type="text" name="series_id" value="<?=$admin_accounts['series_id']?>" /><br>
							
							<label>Remember token</label>
							<input class="form-control" type="text" name="remember_token" value="<?=$admin_accounts['remember_token']?>" /><br>
							
							<label>Expires</label>
							<input class="form-control" type="text" name="expires" value="<?=$admin_accounts['expires']?>" /><br>
							
							<label>Admin type</label>
							<input class="form-control" type="text" name="admin_type" value="<?=$admin_accounts['admin_type']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				