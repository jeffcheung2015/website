<?php 
	include 'ajax.php';
	//echo $_POST['name'];
	echo 'The '.(isset($_POST['submit'])).' submit button was pressed.';
	if(isset($_POST['submit'])){

		$mysqli->query("CREATE table userdb(
			id int(5) UNSIGNED AUTO_INCREMENT primary key,	
			name varchar(20) not null,
			age int(3) not null,
			gender varchar(10) not null,
			username varchar(20) not null,
			password varchar(20) not null
		)");


		$name = $_POST['name'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$mysqli->query("insert into userdb(name, age, gender, username, password) values(
			'$name', '$age', '$gender', '$username', '$password'
		)");



	}	
 ?>