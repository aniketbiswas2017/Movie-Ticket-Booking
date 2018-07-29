<?php

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

if ($newpassword ==$confirmationpassword){

if(!empty($lastname)||!empty($firstname)|| !empty($password)|| !empty($email)||!empty($confirmationpassword)||!empty($streetaddress)||!empty($postalcode))
{
$servername = "db.cs.dal.ca";
$username = "lekhala";
$password = "B00775670";
$dbname = "lekhala";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed. " . $conn->connect_error);
}

else {
  $INSERT = "INSERT into a3_users(LastName,FirstName,Email,Password,StreetAddress,PostalCode) values(?,?,?,?,?,?)";
  //prepare
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param('ssssss',$lastname,$firstname,$email,$newpassword,$streetaddress,$postalcode);
  $stmt->execute();
echo 'New record created successfully';
echo "<script> window.location.assign('login.php'); </script>";
$stmt->close();
$conn->close();
}

}
else{
echo 'Please enter all fields';
echo "<script> window.location.assign('signup.php'); </script>";
die();
}
}
else{
	
	echo "<script> alert('Error: Password must match with confirmation password'); if(confirm('Error: Password must match with confirmation password')) {window.location.assign('signup.php');} else{window.location.assign('signup.php'); }</script>";
	
} 
  ?>
