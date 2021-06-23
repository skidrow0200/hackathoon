

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/svg" href="../media/logo.svg" sizes="128x128" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container" id="container">
<div class="form-container sign-up-container">

</div>
<div class="form-container sign-in-container">
	<form action="signin.php" method="POST">
		<h1>Вход</h1>
		<div class="social-container">
		
	</div>

	<input type="email" name="email" placeholder="Email" id="email">
	<input type="password" name="pass" placeholder="Пароль" id="pass">
	<?php 
	session_start();
	if (isset($_SESSION['errors'])): ?>
    <div class="form-errors">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <p style="color: red;"><?php echo $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; 

		session_destroy();?>
	
	<button style="margin-top: 20px;">ВХОД</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">

			
		</div>

	</div>
</div>
</div>




</body>
</html>








