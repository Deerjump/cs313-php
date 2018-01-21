<h1>CS 313</h1>

<?php 
	$current = basename($_SERVER['PHP_SELF']); 
?>

<nav>
	<ul>
		<li><a class="<?php echo $current == "index.php" ? "current" : "" ?>" href="index.php">Home</a></li>
		<li><a class="<?php echo $current == "assignments.php" ? "current" : "" ?>" href="assignments.php">Assignments</a></li>
		<li><a class="<?php echo $current == "about.php" ? "current" : "" ?>" href="about.php">About Me</a></li>
	</ul>
</nav>