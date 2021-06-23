<?php
				include "includes/header.php";
				include "includes/connect.php";
				
				?>

				

				<h1>Teams</h1>


				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
				
			    <th>Team Name</th>
				<th class="not">Case Number :</th>
				</tr>
				</thead>

				<?php
				$link = new mysqli("localhost","root","0656811644messi.","hackathon_db");
				$t = "SELECT DISTINCT  teamName,caseNumber FROM user";
				$user= mysqli_query($link,$t);
				
					if($user) foreach ($user as $users):
						

					?>
					<tr>

		         <td><?php echo $users['teamName']?></td>



						<td><?php echo $users['caseNumber']?></td>

	
						
						</tr>
					
				
			<?php endforeach; ?>
			

				
					</table><center>
						
					<form action="export-team.php" method="get">
						<button style="font-size: 15px;font-weight: bold;" type="submit" class="btn btn-success rounded-pill text-dark px-5">Экспортировать таблицу </button>
					</form></center>

					<?php include "includes/footer.php";?>
				