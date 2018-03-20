<?php 
	session_start();
	
	if(isset($_SESSION['user_id']))
	{
		require('dbconnect.php');

		$user_id = $_SESSION['user_id'];

		$query = 'SELECT username FROM account WHERE account_id=:user_id';

		$stmt = $db->prepare($query);
		$stmt->bindValue(':user_id', $user_id);
		$stmt->execute();

		$row = $stmt->fetch();
		$username = $row['username'];
	}
	 

	$current = basename($_SERVER['PHP_SELF']); 
	if(isset($_SESSION['user_id']))
	{
		$logged_in = true;
	}
	else
	{
		$logged_in = false;
	}
?>



<h1 class="header-title">CS 313</h1>
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

				<div class="col-xlg-5" style="width:60%">
					<li><a class="btn btn-header <?php echo $current == "about.php" ? "btn-primary" : "btn-outline-primary" ?>" href="about.php">About Me</a></li>
				</div>

				<div class="col-xlg-1">
					<li> 
						<?php 
							if (isset($_SESSION['user_id'])) {
								echo "Welcome," . " $username" . "!";
							}
						?>
					</li>
				</div>

				<div class="col-xlg-1">
					<li><a class="btn <?php echo $logged_in ? "btn-danger" : "btn-success"  ?>" href="<?php echo $logged_in ? "sign-out.php" : "login.php" ?>"><?php echo $logged_in ? "Sign Out" : "Login" ?></a></li>	
				</div>
			</div>
		</div>
	</ul>
</nav>