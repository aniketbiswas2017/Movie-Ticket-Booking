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
                <h1 >Sign up here</h1>          
                         
            </div>
          
        </div>
    </div>
     <section  id="contact-sec">
        <div class="container">
             
            <div class="row g-pad-bottom">
                <div class="col-md-6 ">
                    <h2>Enter all the fields</h2>
                 
                    <p>
                         
                    </p>
                    <form action="connect.php" method="post">
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
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
				<div class="col-md-6">
		<br><br>
   <p id="demo">Click the button to get your position.</p>
   <button onclick="getLocation()">Get My Location</button>
  <script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
		
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;
    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=400x300&key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
//To use this code on your website, get a free API key from Google.
//Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script> 

<script>
if ($newpassword ==$confirmationpassword){
	alert("Error: Password must be different from Username!");
	return flase;
}

</script>  

<div id="mapholder"></div>
                </div>	
            </div>
        </div>
		
		
    </section>
	<section >
	

        <div class="container">
           
                <div class="row">
                  
                    <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Know about our gift cards</h4>
                            <p>
                                   With Plextra gift cards, you can gift your friends & family movie & play tickets, concert passes, whatever it is they love for their birthdays, anniversaries or simply for no reason other than how you feel about them. Pretty sweet, aint it?
                             
							 </p>
                             
                            
                        </div>
                    </div> 
                            
                    </div>
                   <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">See the cash back offers</h4>
                            <p>
                              Delight yourself with crazy offers while you book your tickets. Whether its cashback, freebies or discounts you're after, there's a can't-miss bargain for every single one of you.
.
                                </p>
                             
                            
                        </div>
                    </div> 
                            
                    </div>
                     <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Download the mobile app </h4>
                            <p>
                                   Book your tickets on the go, only with a couple of clicks. Choose from a whopping 100+ cinema screens across Canada and book as late as 20 minutes before showtime for those spur-of-the-moment plans
                                </p>
                             
                            
                        </div>
                    </div> 
                            
                    </div>
                </div>
                        
        </div>
    
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
