<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not" style="font-size: 30px;">Table</th>
		<th class="not" style="font-size: 30px;">Entries</th>
		</tr>
		
				
				
				<tr>
					<td style="font-weight: bold;font-size: 40px;"><a href="user.php">Участники </a></td>
					<td style="font-weight: bold;font-size: 40px;"><?=counting("user", "id")?></td>
				</tr>
				
				
				</table>
				<center>
					<form action="export.php" method="get">
						<button style="font-size: 15px;font-weight: bold;" type="submit" class="btn btn-success rounded-pill text-dark px-5">Экспортировать таблицу </button>
					</form></center>
			<?php include "includes/footer.php";?>
			