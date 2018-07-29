<?php
if(isset($_POST['submit']))
{
$servername = "db.cs.dal.ca";
$username = "lekhala";
$password = "B00775670";
$dbname = "lekhala";


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed. " . $conn->connect_error);
  }

  else {
 $email=$_POST['email'];
 $email= stripslashes($email);
 $email= trim($email);
 $email= htmlspecialchars($email);
 $pwd=$_POST['newpassword'];
 $pwd= stripslashes($pwd);
  $pwd= trim($pwd);
   $pwd= htmlspecialchars($pwd);
 if($email!=''&& $pwd!='')
 {
   $sql = "SELECT email FROM a3_users where password ='$pwd'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_row($result);
   if ($row[0] === $email){

    	 
     echo "<script> window.location.assign('index.php'); </script>";
  }
  else{
    echo "Please enter correct username and password";
  }
}
   else
   {
    echo'Please check the username or password entered';
   }
 }

}

?>
