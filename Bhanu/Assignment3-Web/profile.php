<!DOCTYPE html>
<html lang ="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
  
    <title> Sign up Page</title>
   
    <link href="css/bootstrap.css" rel="stylesheet" />
    
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <link href="css/font-awesome-animation.css" rel="stylesheet" />
     
    <link href="css/prettyPhoto.css" rel="stylesheet" />
      
    <link href="css/style.css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
    
</head>
<body>

         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PLEXTRA</a>
				
            </div>
			
            <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="movies.php">MOVIES</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="login.php">LOGIN</a></li>
					<li id="Reviews"><a href="reviews.php">REVIEWS</a></li>
					<li id="contactus"><a href="contactus.php">CONTACT US</a></li>	
					<li id="profile"><a href="profile.php">UPDATE PROFILE</a></li>					
					
                </ul>
            </div>
           
        </div>
    </div>

    <div class="container"  >
        <div class="row top-pad">
            <div  class="col-md-12" >
                <h1 >Profile Details</h1>          
                         
            </div>
          
        </div>
    </div>
     <section  id="contact-sec">
        <div class="container">
             
            <div class="row g-pad-bottom">
                <div class="col-md-6 ">
                    <h2>User Profile</h2>
                 
                    <p>
                         
                    </p>
                    <form action="connection.php" method="post">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <p> <textarea name="firstname" id="firstname" required="required"  pattern="[A-Za-z]*" class="form-control" rows="1" placeholder="First Name"></textarea> </p>
                                </div>
                                
                            </div>
                        </div>
						<br>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <textarea name="lastname" id="lastname" required="required"  class="form-control" rows="1" placeholder="Last Name"></textarea>
                                </div>
                                
                            </div>
                        </div>
						<br>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <textarea name="email" id="email" required="required"  class="form-control" rows="1" placeholder="Email Address"></textarea>
                                </div>
                                
                            </div>
                        </div>
						<br>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <textarea name="newpassword" id="password" required="required"  class="form-control" rows="1" placeholder="Password"></textarea>
                                </div>
                                
                            </div>
                        </div>
						<br>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <textarea name="confirmationpassword" id="confmpassword" required="required"  class="form-control" rows="1" placeholder="Confirm password"></textarea>
                                </div>
                                
                            </div>
                        </div>
						<br>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <textarea name="streetaddress" id="streetaddress" required="required" class="form-control" rows="1" placeholder="Street Address"></textarea>
                                </div>
                                
                            </div>
                        </div>
						<br>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <textarea name="postalcode" id="postalcode" required="required" class="form-control"  rows="1" placeholder="Postal Code"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
				<div class="col-md-6">
		<br><br>
 <h3> <p> Email cannot be updated here. <br> Profile can be updated with registered Email ID </p></h3>

    </section>
           


     
   
   
   

  
    <div id="footer">
        2018 www.plextra.com | All Right Reserved  
         
    </div>
    
    <script src="plugins/jquery-1.10.2.js"></script>
   
    <script src="plugins/bootstrap.min.js"></script>  
     
    <script src="plugins/jquery.isotope.min.js"></script>
    
    <script src="plugins/jquery.prettyPhoto.js"></script>    
    
    <script src="js/custom.js"></script>
</body>
</html>
