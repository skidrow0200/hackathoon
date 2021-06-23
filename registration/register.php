<?php 
	// header.php
	include ('header.php');

?>

<?php 
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		require ('register-process.php');
	}

?>

	<!-- Registration Area -->

	<section id="register">
		<div class="row m-0">
			<div class="col-lg-4 offset-lg-2">
				<div class="text-center pb-4">
					<h1 class="login-title text-dark">Регистрация</h1>
					
				
<script>
function myFunction() {
  document.getElementById("emailerror").remove();
}
function myFunction1() {
  document.getElementById("teamerror").remove();
}
</script>

				
				</div>

					<div class="d-flex justify-content-center">
						<form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
							
							<div class="form-row">
								<div class="col">
									<input style="width: 300px;" type="text" name="fullName" id="fullName" class="form-control my-3" placeholder="ФИО*" required>
									<input style="width: 300px;" type="tel" name="tel" id="tel" class="form-control my-3" placeholder="Номер телефона*" required >
									
								</div>
							</div>

							<div class="form-row my-3">
								<div class="col">
									<input style="width: 300px;" type="email" name="email" id="email" class="form-control" placeholder="Электронная почта*" required onkeypress="myFunction()">
									<p class="text-danger" id="emailerror"><?php if(isset($error['e'])) echo $error['e'];?></p>
								</div>
								<div class="col">	
									<input style="width: 300px;margin-top: 15px;" type="password" name="pass" id="pass" class="form-control" placeholder="Пароль*" required id="password">
								</div>

							</div>
							
								<div class="col">
									<label for="team" style="font-weight: bold;" class="my-3">Ваша Команда</label>
									<select required style="width: 300px;" class="form-select" name="choices">
										<option selected="selected" disabled="yes">Направление*</option>
										<option name="choice1">Информационная Безопасность</option>
										<option name="choice2">Искусственный интеллект и машинное обучение</option>
										<option name="choice3">Разработка программного обеспечения</option>
									</select>
								<input style="width: 300px;" type="text" name="teamName" id="teamName" class="form-control my-3" placeholder="Название команды*" required onkeypress="myFunction1()">
								<p class="text-danger" id="teamerror"><?php if(isset($error['t'])) echo $error['t'];?></p>
								<p class="text-danger" >
									<input style="width: 300px;" type="text" name="captinName" id="captinName" class="form-control my-3" placeholder="ФИО капитана*" required>
									
								
									<input style="width: 300px;" type="text" name="organization" id="organization" class="form-control my-3" placeholder="Какую организацию представляете" >
									<input style="width: 300px;" type="text" name="teamMembers" id="teamMembers" class="form-control my-3" placeholder="Участники команды" >
									
									
								</div>
								<div class="submit-btn text-center my-4">
									<button type="
									submit" class="btn btn-warning rounded-pill text-dark px-5">Отправить</button>
								</div>

								
						</form>

					</div>

				</div>


			</div>
		</div>
	</section>


<?php 
	// footer.php
	include ('footer.php');

?>