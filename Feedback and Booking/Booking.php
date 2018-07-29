<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plextra - Booking</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <script src="/js/wow.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<header id="header">
    <div class="container">
        <div class="navbar-header">
            <div class="navbar-brand">
                <a class="logo" href="index.html">
                    <img class="logo-img" src="./img/plextra4.png" alt="logo">
                    <img class="logo-alt-img" src="./img/plextra3.png" alt="logo">
                </a>
            </div>
            <button class="navbar-toggle">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <nav id="nav">
            <ul class="main-nav nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
                <li><a href="#home">Movies</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="blog.html">Login &nbsp; <span style="color: #dd0a37;">Sign Up</span></a></li>
            </ul>
        </nav>
    </div>
</header>

<br><br>


<form class="container align-content-center align-self-center">
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Pick date</label><br>
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+7D" });
            } );
        </script>
        <input type="text" class="form-control" id="datepicker">
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Pick Theatre</label>
    <select class="form-control">
        <option>Scotia Cineplex - Park Lane</option>
        <option>Scotia Cineplex - Dartmouth</option>
        <option>Scotia Cineplex - Wolfville</option>
        <option>Scotia Cineplex - Kitchener</option>
        <option>Scotia Cineplex - Mic Mac Mall</option>
    </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Pick Movie</label>
        <select class="form-control">
            <option>Elisiyum</option>
            <option>Mission Impossible</option>
            <option>Life as we know it</option>
            <option>Love you Zindagi</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Pick Showtiming</label>
        <select class="form-control" >
            <option>9.30 AM</option>
            <option>12.30 PM</option>
            <option>03.30 PM</option>
            <option>10.30 PM</option>
        </select>
    </div>

    <button class="btn btn-danger btn-group-toggle"> Submit</button>

</form>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>