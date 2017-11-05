<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname= "testdb";

	$mysqli = mysqli_connect($servername, $username, $password, $dbname);
	if (!$mysqli)
	{		
		die('Could not connect: ' . mysql_error());
	}

	//$result = $mysqli->query("SELECT * FROM comments");
	
	$result1 = $mysqli->query("CREATE TABLE imgDB(
		id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		userName varchar(30) not null,
		imgAddr varchar(30) not null,
		imgDescript varchar(30) not null
	)");






	//echo (mysqli_num_rows($res) ? 1 : 2);
	
 ?>