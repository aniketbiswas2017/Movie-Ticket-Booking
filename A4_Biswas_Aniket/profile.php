<?php
session_start();
include_once 'connection.php';
$user = $_SESSION['email_session'];
$sql = "SELECT * from a1_users where email = '$user'";
$result = $conn->query($sql);
$row = $result->fetch();
$firstname = $row['fname'];
$lastname = $row['lname'];
$address = $row['address'];
$postalcode = $row['postal'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile Page</title>
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
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-b">
	 <?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				if(strpos($fullUrl,"update=empty")==true)
				{
					echo "<p class= 'error'>Missing Value to update</p>";
				}
				elseif(strpos($fullUrl,"update=invalid")==true)
				{
					echo "<p class= 'error'> Please use alphabets</p>";
				}
				elseif(strpos($fullUrl,"update=invaemail")==true)
				{
					echo "<p class= 'error'>Please enter a valid email format</p>";
				}
				
			?>
    <div class="row my-4">
        <div class="col-lg-10 order-lg-10">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#updated" data-toggle="tab" class="nav-link">Update Profile</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5>User Profile</h5>
                    <div class="row">
					<form role="form">
                        <div class="form-group row">
							<form action="/register.php">
                        <div class="col-md-6">
                            <h4>About</h4>
							<h4>Name</h4>
                            <p>
                                <?php echo $firstname." ".$lastname ?>
                            </p>
                            <h4>Email</h4>
                            <p>
                                <?php echo $user ?>
                            </p>
							<h4>Address</h4>
                            <p>
                                <?php echo $address ?>
                            </p>
							
							</div>
							<a href="../delete.php">Delete</a>
							</form>
							
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="updated">
				
                    <form role="form" action="updateProfile.php" method="post">
                        <div class="form-group row" >
							<form action="updateProfile.php" action="post">
                            <input type="text" placeholder="Update First Name" name="fname" value="<?php echo $firstname ?>"required>
							<input type="text" placeholder="Update Last Name" name="lname" value="<?php echo $lastname ?>" required>
							<input type="text" placeholder="Update Street Address" name="address" value="<?php echo $address ?>" required>
							<input type="text" placeholder="Update Postal Code" name="postal" value="<?php echo $postalcode ?>"required>
                        </div>
                            <input type="reset" class="btn btn-secondary" value="Reset">&nbsp;
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
