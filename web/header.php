<h1>CS 313</h1>

<?php 
	$current = basename($_SERVER['PHP_SELF']); 
?>

<nav>
	<ul>
		<li><a class="headerlist <?php echo $current == "home.php" ? "current" : "" ?>" href="home.php">Home</a></li>
		<li><a class="headerlist <?php echo $current == "assignments.php" ? "current" : "" ?>" href="assignments.php">Assignments</a></li>
		<li><a class="headerlist <?php echo $current == "browse.php" ? "current" : "" ?>" href="browse.php">Shopping</a></li>
		<li><a class="headerlist <?php echo $current == "about.php" ? "current" : "" ?>" href="about.php">About Me</a></li>

	</ul>
</nav>