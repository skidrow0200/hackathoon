<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$cases = getById("cases", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Case</legend>
						<input name="cat" type="hidden" value="cases">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">

						   <label>Case Number</label>
							<input class="form-control" type="number" name="user_id" value="<?=$cases['user_id']?>" /><br>
							<br>
				
							<label>Case Title</label>
							<input class="form-control" type="text" name="caseTitle" value="<?=$cases['caseTitle']?>" /><br>
							
							<label>Case Description</label>

							<textarea class="form-control" type="text" name="caseDescription" value="<?=$cases['caseDescription']?>" rows="5" cols="33"></textarea>	<br>		
							
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				