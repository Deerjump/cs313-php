<?php
	require('dbconnect.php');
	
	$id = (int)$_GET['id'];
	echo $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forum</title>
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
						<?php
							foreach($db->query("SELECT * FROM thread INNER JOIN account ON thread.author_id = account.account_id WHERE thread_id=$id") as $row)
							{
								$title = $row['title'];
								$author = $row['username'];
								$date = $row['date'];
								$content = $row['content'];
								echo "<h2>$title Test</h2>";
								echo "<h6>by: $author. written on $date</h6>";
							}
						?> 
						<br>
					</div>
				</div>
				<div class="card-body">
					<div class="card-text">
						<?php
							echo "<p>$content</p>";
						?>
					</div>
				</div>	
			</div>
		</div>
	</div>

</body>
</html>