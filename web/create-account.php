<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<?php include "header.php" ?>
	</header>
	
	<div class="bodywrapper">
		<div class="container-fluid">
			<div class="card cart">
				<div class="card-header">
					<div class="card-title">
						<h2>Create your account</h2>
						<form action="db-login.php" method="POST">
							<label for="new_username">Username</label>
							<input type="text" name="new_username" placeholder="Username">
							
							<label for="new_password">Password</label>
							<input type="password" name="new_password" placeholder="Password">

							<label for="new_display">Display Name</label>
							<input type="text" name="new_display" placeholder="Display Name">
							
							<input class="btn btn-success" type="submit" value="Login">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>