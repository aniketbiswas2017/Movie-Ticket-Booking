<?php
	include_once 'connection.php';
	session_start();
	$email = $_SESSION['email_session'];
	$sql = "DELETE FROM a1_users where email = '$email'";					
	$conn->exec($sql);
	session_unset();
	session_destroy();
	header("Location: ../login.php");
	exit();
	?>