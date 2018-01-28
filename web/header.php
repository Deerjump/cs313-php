<h1>CS 313</h1>

<?php 
	$current = basename($_SERVER['PHP_SELF']); 
?>

<nav>
	<ul>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xlg-1">
					<li><a class="headerlist <?php echo $current == "home.php" ? "current" : "" ?>" href="home.php">Home</a></li>
				</div>

				<div class="col-xlg-1">
					<li><a class="headerlist <?php echo $current == "assignments.php" ? "current" : "" ?>" href="assignments.php">Assignments</a></li>
				</div>
		
				<div class="col-xlg-1">
					<li><a class="headerlist <?php echo $current == "browse.php" ? "current" : "" ?>" href="browse.php">Shopping</a></li>
				</div>

				<div class="col-xlg-1">
					<li><a class="headerlist <?php echo $current == "about.php" ? "current" : "" ?>" href="about.php">About Me</a></li>
				</div>
				<div class="col-xlg-2">
					
				</div>
				<div class="col-xlg-1">
					<li><a class="headerlist <?php echo $current == "cart.php" ? "current" : "" ?>" href="cart.php">Cart</a></li>
				</div>
				<div class="col-xlg-1">
					<li><a class="headerlist <?php echo $current == "test.php" ? "current" : "" ?>" href="test.php">Test</a></li>
				</div>
			</div>
		</div>
	</ul>
</nav>