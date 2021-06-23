<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-admin_accounts.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Admin_accounts</a>

				<h1>Admin_accounts</h1>
				<p>This table includes <?php echo counting("admin_accounts", "id");?> admin_accounts.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>User name</th>
			<th>Password</th>
			<th>Series id</th>
			<th>Remember token</th>
			<th>Expires</th>
			<th>Admin type</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$admin_accounts = getAll("admin_accounts");
				if($admin_accounts) foreach ($admin_accounts as $admin_accountss):
					?>
					<tr>
		<td><?php echo $admin_accountss['id']?></td>
		<td><?php echo $admin_accountss['user_name']?></td>
		<td><?php echo $admin_accountss['password']?></td>
		<td><?php echo $admin_accountss['series_id']?></td>
		<td><?php echo $admin_accountss['remember_token']?></td>
		<td><?php echo $admin_accountss['expires']?></td>
		<td><?php echo $admin_accountss['admin_type']?></td>


						<td><a href="edit-admin_accounts.php?act=edit&id=<?php echo $admin_accountss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $admin_accountss['id']?>&cat=admin_accounts" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				