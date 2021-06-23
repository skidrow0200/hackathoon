<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-user.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New User</a>

				<h1>User</h1>
				<p>This table includes <?php echo counting("user", "id");?> user.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>UserID</th>
			<th>FullName</th>
			<th>TelNumber</th>
			<th>Email</th>
			<th>SelectedSubject</th>
			<th>TeamName</th>
			<th>CaptinName</th>
			<th>Case</th>
			<th>Organization</th>
			<th>TeamMembers</th>
			<th>RegisterDate</th>

				
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$user = getAll("user");
				if($user) foreach ($user as $users):
					?>
					<tr>
		<td><?php echo $users['userID']?></td>
		<td><?php echo $users['fullName']?></td>
		<td><?php echo $users['telNumber']?></td>
		<td><?php echo $users['email']?></td>
		<td><?php echo $users['selectedSubject']?></td>
		<td><?php echo $users['teamName']?></td>
		<td><?php echo $users['captinName']?></td>
		<td><?php echo $users['caseNumber']?></td>
		<td><?php echo $users['organization']?></td>
		<td><?php echo $users['teamMembers']?></td>
		<td><?php echo $users['registerDate']?></td>


						
						<td><a href="save.php?act=delete&id=<?php echo $users['id']?>&cat=user" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table><center>
					<form action="export.php" method="get">
						<button style="font-size: 15px;font-weight: bold;" type="submit" class="btn btn-success rounded-pill text-dark px-5">Экспортировать таблицу </button>
					</form></center>
					<?php include "includes/footer.php";?>
				