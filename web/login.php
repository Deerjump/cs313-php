<?php
	require('dbconnect.php');
	
	$query = $_GET['query'];
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
						<input type="text" name="title" placeholder="Title Here">
					</div>
				</div>
				<div class="card-body">
					<div class="card-text">
						<?php
							
							
						?>
					</div>
				</div>	
			</div>
		</div>
	</div>

</body>
</html>