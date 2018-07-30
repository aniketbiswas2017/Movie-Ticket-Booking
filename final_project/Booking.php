<?php
session_start();
?>
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
                <li><a href="Login.php">Login</a></li>
					<li><a href="Register.php">Sign Up</a></li>
            </ul>
        </nav>
    </div>
</header>

<br><br>


<form class="container align-content-center align-self-center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <div class="form-group">
        <label for="exampleFormControlInput1">Movie : </label>
        <?php
        // Echo session variables that were set on previous page
        echo $_SESSION["ELYSIUM"] ;

        ?>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Pick date</label><br>
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+14D" , dateFormat: 'yy-mm-dd'});
            } );
        </script>
        <input type="text" name="showdate" class="form-control" id="datepicker" value="<?php echo $showdate ?>">
    </div>
    <br>
    <button class='btn btn-danger btn-group-toggle'> View Ticket Availability</button>
    <br>
    <br>

    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $showdate = $_POST["showdate"];
        $servername = "localhost";
        $username = "root";
        $password = "root";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=kunal; port=3306", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT theatre, showtiming, showdate FROM kunal.Movies WHERE moviename='".$_SESSION["ELYSIUM"]."' AND showdate='$showdate';");
            $stmt->execute();

            while($result = $stmt->fetch())
            {
                $theatre = $result[0];
                $showtiming = $result[1];
                $showdate = $result[2];

                if($result[0] != null)
                {
                    echo "<div style='float: left; width: 300px;'><b>Theatre : </b>   $theatre </div>
              <div style='float: left; width: 200px;'><b> Showtiming : </b>  $showtiming </div>
              <div style='float: left; width: 200px;'><b> Showdate : </b> $showdate</div>
              <a class='btn btn-danger btn-group-toggle' href='SeatSelect.php'> Select Seat</a>
                        <br><br>";

                    $theatre = $_SESSION["Theatre"] ;
                    $showtiming = $_SESSION["Showtiming"];
                    $showdate = $_SESSION["Showdate"];

                }
                else
                {
                    echo "<div> Sorry! No shows available </div>";
                }



            }

        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    }




    ?>


</form>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>