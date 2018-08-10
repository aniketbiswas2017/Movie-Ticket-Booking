<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Page</title>
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
<br><br><br> <h1 align="center">Create a new account</h1>
<div class="container">
<form action="RegisterProcess.php" method="post">
<input type="text" placeholder="Enter first name" name="fname" required>
<input type="text" placeholder="Enter last name" name="lname" required>
<input type="text" placeholder="Enter email address" name="email" required>
<input type="password" placeholder="Enter password" name="psw" required>
<input type="password" placeholder="Confirm password" name="psw-repeat" required>
<input type="text" placeholder="Enter street address" name="address" required>
<input type="text" placeholder="Enter postal code" name="postal" required>
   
<p style="color:white">&nbsp;By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & &nbsp;Conditions.</a> Already a member? <a href="login.html" style="color:dodgerblue">Log In Now</a></p>
<button type="submit" name="submit">Sign Up</button>
<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				if(strpos($fullUrl,"signup=empty")==true)
				{
					echo "<p class= 'error'>Please fill all the fields</p>";
					exit();
				}
				elseif(strpos($fullUrl,"signup=invalidfirstname")==true)
				{
					echo "<p class= 'error'> Please use alphabets for name credentials</p>";
					exit();
				}
				elseif(strpos($fullUrl,"signup=invalidemailaddress")==true)
				{
					echo "<p class= 'error'>Email address format invalid</p>";
					exit();
				}
				elseif(strpos($fullUrl,"signup=passwordvalidation")==true)
				{
					echo "<p class= 'error'>Password too short. Password minimum 8 characters </p>";
					exit();
				}
				elseif(strpos($fullUrl,"signup=passwordincorrect")==true)
				{
					echo "<p class= 'error'>Password do not match.</p>";
					exit();
				}
				elseif(strpos($fullUrl,"signup=userexists")==true)
				{
					echo "<p class= 'error'>User already exists</p>";
					exit();
				}
			?>


</form>
</div>
<br>


</body>
</html>
