<?php
include_once 'connection.php';
session_start();

$username = trim($_REQUEST['uname']);
$username = htmlentities($username);
$password = trim($_REQUEST['psw']);

if(empty($username) || empty($password)) {
    $_SESSION['error'] = "Please fill the fields";
    header("Location: login.php");
    exit();
} else{

    try {


		$stmt = $conn->prepare("SELECT email, password FROM a1_users WHERE email=:email");
        $stmt->execute(array(':email' => $username));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if(($row['email'] == $username) && $password == $row['password']) {
                $_SESSION['user_session'] = $row['firstname'];
				 $_SESSION['email_session'] = $row['email'];
                header("Location: welcome.php");
            } 
            else{
                $_SESSION['error'] = "Please enter the correct credentials";
                header("Location: login.php");
            }

        

        $conn = null;
    }
    catch(PDOException $e)
    {
        echo "failed: " . $e->getMessage();
        $conn = null;
    }
}