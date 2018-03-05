<?php 
	try
	{
		$user = 'postgres';
		$password = 'postgres';
		$db = new PDO('pgsql:host=127.0.0.1;dbname=mydb', $user, $password);
	}
	catch(PDOEcxeption $ex)
	{
		echo 'Error!: ' . $ex->getMessage();
		die();
	}
 ?>
