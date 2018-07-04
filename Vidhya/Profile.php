<?php
session_start();
?><!DOCTYPE html>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="profile2.png" alt="image" class="profile-image img-circle" style="padding-top: 0.5em; padding-bottom: 0.5em; height: 3em; width: 2.5em;">&nbsp;&nbsp;&nbsp;Vidhyashree</a>
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

    <hr>
    <section>
    <div class="row">
            <div class="text-center">
                <img src="profile2.png" class="avatar img-circle" alt="avatar" height="120" width="120">
            </div><br/><div class="col-md-2 col-lg-offset-5">
                <input type="file" class="form-control"/>
            </div>
            </div>

    </section><br/>
            <form action="ProfileValidation.php" method="post" class="form-horizontal">
                <div class="form-group">

                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                        <span class="error" style="color: #FF0000;"><?php
                            if (!empty($_SESSION['error'])) {
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            } ?></span>
                        <span class="error" style="color: #FF0000;"><?php
                            if (!empty($_SESSION['errorFirstName'])) {
                                echo $_SESSION['errorFirstName'];
                                unset($_SESSION['errorFirstName']);
                                unset($_SESSION['firstName']);
                            }
                            ?></span>
                        <input class="form-control" name="firstName" type="text" value="Vidhyashree"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                        <span class="error" style="color: #FF0000;"><?php
                            if (!empty($_SESSION['errorLastName'])) {
                                echo $_SESSION['errorLastName'];
                                unset($_SESSION['errorLastName']);
                                unset($_SESSION['lastName']);
                            }
                            ?></span>
                        <input class="form-control" name="lastName" type="text" value="Boopathy"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <span class="error" style="color: #FF0000;"><?php
                            if (!empty($_SESSION['errorEmail'])) {
                                echo $_SESSION['errorEmail'];
                                unset($_SESSION['errorEmail']);
                                unset($_SESSION['email']);
                            }
                            ?></span>
                        <input class="form-control" name="email" type="text" value="vd896908@dal.ca"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Username:</label>
                    <div class="col-md-8">
                        <span class="error" style="color: #FF0000;"><?php
                            if (!empty($_SESSION['userName'])) {
                                echo $_SESSION['userName'];
                                unset($_SESSION['userName']);
                            }
                            ?></span>
                        <input class="form-control" name="userName" type="text" value="vidhya"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                        <span class="error" style="color: #FF0000;"><?php
                            if (!empty($_SESSION['errorPassword'])) {
                                echo $_SESSION['errorPassword'];
                                unset($_SESSION['errorPassword']);
                            }
                            ?></span>
                        <input class="form-control" name="password" type="password" value="11111122333"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Confirm password:</label>
                    <div class="col-md-8">
                        <span class="error" style="color: #FF0000;"><?php
                            if (!empty($_SESSION['errorConfirmPassword'])) {
                                echo $_SESSION['errorConfirmPassword'];
                                unset($_SESSION['errorConfirmPassword']);
                            }
                            ?></span>
                        <input class="form-control" name="confirmPassword" type="password" value="11111122333"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-danger" value="Save Changes"/>
                        <span></span>
                        <input type="reset"  class="btn btn-default" value="Cancel"/>
                    </div>
                </div>
            </form>

</div>

<hr>
</body>
</html>