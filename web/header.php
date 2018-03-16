<h1 class="header-title">CS 313</h1>

<?php 
	session_start(); 

	$current = basename($_SERVER['PHP_SELF']); 
	$logged_in = true;

	if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
		$logged_in = true;
	}
	else{
		$logged_in = false;
	}
?>

<nav>
	<ul>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xlg-1">
					<li><a class="btn btn-header <?php echo $current == "index.php" ? "btn-primary" : "btn-outline-primary" ?>" href="index.php">Home</a></li>
				</div>

				<div class="col-xlg-1">
					<li><a class="btn btn-header <?php echo $current == "assignments.php" ? "btn-primary" : "btn-outline-primary" ?>" href="assignments.php">Assignments</a></li>
				</div>
		
				<div class="col-xlg-1">
					<li><a class="btn btn-header <?php echo $current == "browse.php" ? "btn-primary" : "btn-outline-primary" ?>" href="browse.php">Shopping</a></li>
				</div>

				<div class="col-xlg-1">
					<li><a class="btn btn-header <?php echo $current == "cart.php" ? "btn-primary" : "btn-outline-primary" ?>" href="cart.php">Cart</a></li>
				</div>
				<div class="col-xlg-1">
					<li><a class="btn btn-header <?php echo $current == "forum.php" ? "btn-primary" : "btn-outline-primary" ?>" href="forum.php">Forum</a></li>
				</div>

				<div class="col-xlg-1">
					<li><a class="btn btn-header <?php echo $current == "about.php" ? "btn-primary" : "btn-outline-primary" ?>" href="about.php">About Me</a></li>
				</div>

				<div class="col-xlg-1">
					<li> </li>
				</div>

				<div class="col-xlg-1">
					<li> </li>
				</div>

				<div class="col-xlg-1">
					<li> </li>
				</div>

				<div class="col-xlg-1">
					<li> </li>
				</div>

				<div class="col-xlg-2">
					<li><a class="btn <?php echo $logged_in ? "btn-danger" : "btn-success"  ?>" href="<?php echo $logged_in ? "sign-out.php" : "login.php" ?>"><?php echo $logged_in ? "Sign Out" : "Login" ?></a></li>	
				</div>
			</div>
		</div>
	</ul>
</nav>