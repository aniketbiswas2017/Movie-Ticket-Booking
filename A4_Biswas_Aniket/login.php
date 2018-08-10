<?php
session_start();
if(isset($_SESSION['user_session'])){
    session_destroy();
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link type="text/css" rel="stylesheet" href="./assets/css/style.css" />
</head>
<body background="./assets/img/bg.jpg">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="index.html" class="navbar-brand">Assignment 4</a>
    <div class="navbar-collapse collapse justify-content-stretch">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Sign Up</a>
            </li>

        </ul>
    </div>
</nav>
<br><br><br>  <h1 align="center">Welcome Back</h1><br>
<div class="container">
<span class="error"><?php
                    if (!empty($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    } ?></span>
<form action="LoginProcess.php" method="post">
    <input type="text" placeholder="Enter email" name="uname" required>	
    <input type="password" placeholder="Enter password" name="psw" required>
    <br>
	&nbsp;<input type="checkbox" checked="checked" name="remember"> Keep me logged in	<br><br>
    <button type="submit">Sign In</button>
    <label>
	<br>
	<p style="color:white">Not a member yet? <a href="register.php" style="color:dodgerblue">Sign Up Now</a></p>
      
    </label>
  </div>

</form>
</div>

</body>
</html>
