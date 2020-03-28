<?php
	$dbhost = getenv("MYSQL_SERVICE_HOST");
	$dbusername = 'root';
	$dbpassword = 'water';
	$dbname = 'waterdb';

	$x = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
	if ($x->connect_error) {
		echo "Unable to connect, please try again";
		die();
	}
?>
