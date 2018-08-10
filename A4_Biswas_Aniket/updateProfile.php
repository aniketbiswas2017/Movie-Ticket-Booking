<?php
	session_start();
$email = $_SESSION['email_session'];


if(isset($_POST['submit'])){
	include_once 'connection.php';

	$errors = array();
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$address = $_POST['address'];
	$postalcode = $_POST['postal'];
	
	if(empty($firstname) || empty($lastname) || empty($address) || empty($postalcode))
	{
		echo "Empty Values";
		header("Location: ../profile.php?update=empty");
		exit();
	}
	else
	{
		if(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $last))
		{
			
			header("Location: ../profile.php?update=invalid");
			exit();
		}
		else
		{
				
					try {
					$sql = "UPDATE a1_users set address = '$address', fname = '$firstname', lname = '$lastname', postal = '$postalcode' where email = '$email'";
					
						
					$conn->exec($sql);
					header("Location: ../profile.php?update=success");
					exit();
							//echo "New record created successfully";
					}
					catch(PDOException $e)
					{
						echo $sql . "<br>" . $e->getMessage();
					}
					
			
				
		}
	

	}
}
else
{
	header("Location: ../profile.php");
	exit();
}
?>