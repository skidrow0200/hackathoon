<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-cases.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Cases</a>

				<h1>Cases</h1>
				<p>This table includes <?php echo counting("cases", "id");?> cases.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
			<th>Case Number</th>
			<th>Case Title</th>
			<th>Case Description</th>
			

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$cases = getAll("cases");
				if($cases) foreach ($cases as $casess):
					?>
					<tr>
		<td><?php echo $casess['id']?></td>
		<td><?php echo $casess['caseTitle']?></td>
		<td><?php echo $casess['caseDescription']?></td>


						<td><a href="edit-cases.php?act=edit&id=<?php echo $casess['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $casess['id']?>&cat=cases" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				