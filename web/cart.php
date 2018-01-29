<?php 
	session_start();
	$prod1 = $_SESSION['cart']['prod1'];
	$prod2 = $_SESSION['cart']['prod2'];
	$prod3 = $_SESSION['cart']['prod3'];
	$prod4 = $_SESSION['cart']['prod4'];
	$prod5 = $_SESSION['cart']['prod5'];
	$prod6 = $_SESSION['cart']['prod6'];
?>
<!DOCTYPE html>
<html>
<head>
	<title> Shopping Cart! </title>
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
					<div class="card-title">Shopping Cart</div>
				</div>
				<div class="card-text">
					<ul>
						<?php
							if($_SESSION['cart']['prod1'] != 0){
								echo "<li class='list-group-item'><div class='row'>
								<div class='col-sm-4'>Option 1</div>
								<div class='col-sm-4'>$prod1</div>
								<div class='col-sm-4'><a href='cart.php'>Remove From Cart</a></div>
								</div></li>";
							}
							if($_SESSION['cart']['prod2'] != 0){
								echo "<li class='list-group-item'><div class='row'>
								<div class='col-sm-4'>Option 2</div>
								<div class='col-sm-4'>$prod2</div>
								<div class='col-sm-4'><a href='cart.php'>Remove From Cart</a></div>
								</div></li>";
							}
							if($_SESSION['cart']['prod3'] != 0){
								echo "<li class='list-group-item'><div class='row'>
								<div class='col-sm-4'>Option 3</div>
								<div class='col-sm-4'>$prod3</div>
								<div class='col-sm-4'><a href='cart.php'>Remove From Cart</a></div>
								</div></li>";
							}
							if($_SESSION['cart']['prod4'] != 0){
								echo "<li class='list-group-item'><div class='row'>
								<div class='col-sm-4'>Option 4</div>
								<div class='col-sm-4'>$prod4</div>
								<div class='col-sm-4'><a href='cart.php'>Remove From Cart</a></div>
								</div></li>";
							}
							if($_SESSION['cart']['prod5'] != 0){
								echo "<li class='list-group-item'><div class='row'>
								<div class='col-sm-4'>Option 5</div>
								<div class='col-sm-4'>$prod5</div>
								<div class='col-sm-4'><a href='cart.php'>Remove From Cart</a></div>
								</div></li>";
							}
							if($_SESSION['cart']['prod6'] != 0){
								echo "<li class='list-group-item'><div class='row'>
								<div class='col-sm-4'>Option 6</div>
								<div class='col-sm-4'>$prod6</div>
								<div class='col-sm-4'><a href='cart.php'>Remove From Cart</a></div>
								</div></li>";
							}
						?>
						<a href="redirect.php">Clear Cart</a>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>