<?php




$servername = "db.cs.dal.ca";
$username = "lekhala";
$password = "B00775670";
$dbname = "lekhala";


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  echo "Connected";
  

  if ($conn->connect_error) {
      die("Connection failed. " . $conn->connect_error);
  }

  else {
$firstname =$_POST['firstname'];
$firstname = stripslashes($firstname);
$firstname = trim($firstname);
$firstname = htmlspecialchars($firstname);
$lastname =$_POST['lastname'];
$lastname = stripslashes($lastname);
$lastname = trim($lastname);
$lastname = htmlspecialchars($lastname);
$email =$_POST['email'];
$email= stripslashes($email);
$email= trim($email);
$email= htmlspecialchars($email);
$newpassword =$_POST['newpassword'];
$newpassword= stripslashes($newpassword);
$newpassword= trim($newpassword);
$newpassword= htmlspecialchars($newpassword);
$confirmationpassword=$_POST['confirmationpassword'];
$confirmationpassword= stripslashes($confirmationpassword);
$confirmationpassword= trim($confirmationpassword);
$confirmationpassword= htmlspecialchars($confirmationpassword);
$streetaddress=$_POST['streetaddress'];
$streetaddress= stripslashes($streetaddress);
$streetaddress= trim($streetaddress);
$streetaddress= htmlspecialchars($streetaddress);
$postalcode=$_POST['postalcode'];
$postalcode= stripslashes($postalcode);
$postalcode= trim($postalcode);
$postalcode= htmlspecialchars($postalcode);
 
 if($email!='')
 {

  #$Update = "update a3_users set FirstName= '$firstname', LastName='$lastname',Password ='$newpassword',StreetAddress= '$streetaddress',PostalCode='$postalcode' where Email = '$email'";
  //prepare
 # $stmt = $conn->prepare($Update);
 # $stmt->bind_param('ssssss',$firstname,$lastname,$email,$newpassword,$streetaddress,$postalcode);
 # $stmt->execute();
  #echo 'Profile updated successfully';
   #  echo "<script> window.location.assign('profile.php'); </script>";
	# 	 $stmt->close();
     #$conn->close();
	 
	 $sql = "update a3_users set FirstName= '$firstname', LastName='$lastname',Password ='$newpassword',StreetAddress= '$streetaddress',PostalCode='$postalcode' where Email = '$email'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	echo "<script> window.location.assign('profile.php'); </script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

	 
  }
  else{
    echo "Please enter registered Email";
  }
}
   



?>
