<?php
session_start();

$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$email = $_REQUEST['email'];
$userName = $_REQUEST['userName'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];

if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($userName) || empty($confirmPassword)){
    $_SESSION['error'] = "Fields cannot be empty.";
    header("Location: Profile.php");
    exit();
} else if(!($password == $confirmPassword)){
    $_SESSION['errorPassword'] = "Password doesn't match with confirm password.";
    header("Location: Profile.php");
    exit();
} else if(strlen($password) < 8){

    $_SESSION['errorPassword'] = "Password should have a minimum of 8 characters.";
    header("Location: Profile.php");
    exit();
} else if(!preg_match("/^[a-zA-Z ]*$/",$firstName)){

    $_SESSION['errorFirstName'] = "Please enter valid characters.";
    header("Location: Profile.php");
    exit();
} else if(!preg_match("/^[a-zA-Z ]*$/",$lastName)){

    $_SESSION['errorLastName'] = "Please enter valid characters.";
    header("Location: Profile.php");
    exit();
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

    $_SESSION['errorEmail'] = "Please enter a valid email.";
    header("Location: Profile.php");
    exit();
} else if(!preg_match("/^[a-zA-Z ]*$/",$userName)){
    $_SESSION['errorFirstName'] = "Please enter valid characters.";
    header("Location: Profile.php");
    exit();
}