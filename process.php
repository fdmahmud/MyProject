<?php
	$mysqli = new mysqli('localhost','root','','database1') or die(mysqli_error($mysqli));

	if (isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$mysqli->query("INSERT INTO table (id, Fname, Lname, Email, Pass) VALUES('','$fname','$lname','$email','$password')") or die($mysqli->error);
	}


?>
