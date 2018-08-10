
<?php
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$errors = array();
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['psw'];
	$address = $_POST['address'];
	$postalcode = $_POST['postal'];
	$confirmpassword = $_POST['psw-repeat'];
	
	if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($address) || empty($postalcode))
	{
		echo "Empty Values";
		header("Location: ../register.php?signup=empty");
		exit();
	}
	else
	{
		if(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $last))
		{
			
			header("Location: ../register.php?signup=invalidfirstname");
			exit();
		}
		else
		{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				
				header("Location: ../register.php?signup=invalidemailaddress");
				exit();
			}
			else
			{	if(strlen($password)<8)
				{
					header("Location: ../register.php?signup=passwordvalidation");
					exit();
				}
				else
				{
						if($password!=$confirmpassword)
						{
						
						header("Location: ../register.php?signup=passwordincorrect");
						exit();
						}
						else{
						try {
						$sql1 = "select * from a1_users where email = '$email' ";
						$result = $conn->query($sql1);
						$row = $result->fetchAll();
						if(!empty($row))
						{
							
							header("Location: ../register.php?signup=userexists");
							exit();
						}
						else
						{
							
							$sql = "INSERT INTO a1_users (fname, lname, email, password, address, postal) VALUES('$firstname','$lastname','$email','$password','$address','$postalcode')";
						
							$conn->exec($sql);
							header("Location: ../login.php?signup=success");
							exit();
							//echo "New record created successfully";
						}
						
						}
						catch(PDOException $e)
						{
						echo $sql . "<br>" . $e->getMessage();
						}
					}
					
				}
				
		}
	

	}
}
}
else
{
	header("Location: ../register.php");
	exit();
}
?>