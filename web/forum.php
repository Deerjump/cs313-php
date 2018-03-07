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
						Forum Threads <br>
						<form method="GET">
							<input type="text" name="query" placeholder="Keyword" value="<?php echo $query ?>">
							<input type="submit" value="Search" /> 
						</form>
					</div>
				</div>
				<div class="card-body">
					<div class="card-text">
						<?php
							
								foreach ($db->query("SELECT * FROM thread INNER JOIN account ON thread.author_id = account.account_id WHERE LOWER(title) LIKE LOWER('%$query%') OR LOWER(username) LIKE LOWER('%$query%')")  as $row) {
									$title = $row['title'];
									$author = $row['username'];
									$id = $row['thread_id'];
									
									echo "<div class='row'>";
									echo "<div class= 'col-md-4'><strong><a href='view-thread.php?id=$id'>$title</a></strong></div>";
									echo "<div class= 'col-md-4'>" . " " .  "</div>";
									echo "<div class= 'col-md-4'>" .  "written by: <strong>$author</strong>" . "</div></div>";

								}
								if(count($row)==0){
									echo "<div class='row'><div class='col-md-12'> <h2>There are no results for $query!</h2><h4><u><a href='forum.php'>Return</a></u></h4></div></div>";
								}
						?>
					</div>
				</div>	
			</div>
		</div>
	</div>

</body>
</html>