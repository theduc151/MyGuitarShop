<?php 
	$dsn = 'mysql:host=localhost;dbname=my_guitar_shop';
	$username = 'mgs_user';
	$password = 'pa55word';

	try {
		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $e) {
		echo "Database connection failed.";
		exit;
	}
?>