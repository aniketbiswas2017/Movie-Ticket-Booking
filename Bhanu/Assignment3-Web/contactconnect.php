<?php

$name =$_POST['name'];
$name = stripslashes($name);
$name = trim($name);
$name = htmlspecialchars($name);

$email =$_POST['email'];
$email= stripslashes($email);
$email= trim($email);
$email= htmlspecialchars($email);

$message=$_POST['message'];
$message= stripslashes($message);
$message= trim($message);
$message= htmlspecialchars($message);



if(!empty($name)|| !empty($email)||!empty($message))
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
  $INSERT = "INSERT into a4_users(Name,Email,Message) values(?,?,?)";
  //prepare
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param('sss',$name,$email,$message);
  $stmt->execute();

echo "<script>  if(confirm('Message sent! You will be contacted soon.')) {window.location.assign('contactus.php');} else{window.location.assign('contactus.php'); }</script>";

$stmt->close();
$conn->close();
}

}
else{
echo 'Please enter all fields';
echo "<script> window.location.assign('signup.php'); </script>";
die();
}


  ?>
