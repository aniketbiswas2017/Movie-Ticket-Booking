<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Web Assignment One</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
</head>
<body>

<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Plextra</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Movies.php">Movies</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Sports</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li style="margin-top: 1.5em"><form>
                                <input class="form-control" type="text" placeholder="Search..."/>
                            </form></li>
                        <li><a href="#">   </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="profile2.png" alt="profile image" class="profile-image img-circle" style="padding-top: 0.5em; padding-bottom: 0.5em; height: 3em; width: 2.5em;">&nbsp;&nbsp;&nbsp;Vidhyashree</a>
                            <ul class="dropdown-menu">
                                <li><a href="Profile.php">Profile</a></li>
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Settings</a></li>
                                <li role="separator" class="divider"></li>
                                <li role="separator" class="divider"></li>

                            </ul></li>
                        <li><a href="#"> </a></li>


                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>
<div class="container">
    <h3 style="margin-left: 40%">WATCH TRAILERS</h3><hr>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active" id="crOne">

                <a><img class="first-slide" src="trailer1.png" alt="video" data-toggle="modal" data-target="#modal1"></a>

                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="color: floralwhite;">Click here to watch the Trailer!</h1>
                        <p style="color: floralwhite;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">

                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tJfDBSWYqU8" allowfullscreen></iframe>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="item" id="crTwo">
                <a><img class="second-slide" src="trailer2.png" alt="video" data-toggle="modal" data-target="#modal6"></a>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Click here to watch the trailer!</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">

                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2Yy1atleXSI" allowfullscreen></iframe>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="item" id="crThree">
                <a><img class="third-slide" src="trailer3.png" alt="video" data-toggle="modal" data-target="#modal4"></a>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Click here to watch the trailer!</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">

                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Da0yH07yFZU" allowfullscreen></iframe>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><br/>
<div class="container marketing">
    <h3 style="margin-left: 40%">BOOK MOVIES</h3><hr>
<div class="row">

    <div class="col-md-4">
        <img src="moviewatch.jpg" alt="Generic placeholder image" width="350" height="350">
        <p><a class="btn btn-danger" href="#" role="button" style="width: 25em">Book Now</a></p>

    </div>
    <div class="col-md-4">

        <img src="movie2.jpg" alt="Generic placeholder image" width="350" height="350">
        <p><a class="btn btn-danger" href="#" role="button" style="width: 25em">Book Now</a></p>

    </div>
    <div class="col-md-4">

        <img src="movie3.jpg" alt="Generic placeholder image" width="350" height="350">
        <p><a class="btn btn-danger" href="#" role="button" style="width: 25em">Book Now</a></p>

    </div>
</div>
</div>
<br/><br/>
<div class="container marketing">
    <div class="row">

        <div class="col-md-4">

            <img src="movie4.jpg" alt="Generic placeholder image" width="350" height="350">
            <p><a class="btn btn-danger" href="#" role="button" style="width: 25em">Book Now</a></p>

        </div>
        <div class="col-md-4">
            <img src="movie5.jpg" alt="Generic placeholder image" width="350" height="350">
            <p><a class="btn btn-danger" href="#" role="button" style="width: 25em">Book Now</a></p>


        </div>
        <div class="col-md-4">

            <img src="movie6.jpg" alt="Generic placeholder image" width="350" height="350">
            <p><a class="btn btn-danger" href="#" role="button" style="width: 25em">Book Now</a></p>

        </div>
    </div>
</div>


</body>
</html>