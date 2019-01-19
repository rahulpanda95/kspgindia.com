<?php
session_start();
// If Session not set send user to login page
if (!isset($_SESSION["email"])) {
    header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <title>Utkarsh - KSPG India</title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Bootstrap CSS -->
<!--    <link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->

    <!-- Custom styles for this template -->
    <style type="text/css">

        .h-divider{
            margin-top:5px;
            margin-bottom:5px;
            height:1px;
            width:100%;
            border-top:4px solid #e12f54;
        }


    </style>
</head>
<body>

<!--<header class="header-area">-->
<!--    <div class="viral-news-main-menu" id="stickyMenu">-->
<!--        <div class="classy-nav-container breakpoint-off">-->
<!--            <div class="container">-->
                <!-- Menu -->
<!--                <nav class="classy-navbar justify-content-between" id="viralnewsNav">-->
<!---->
                    <!-- Logo -->
<!--                    <a class="nav-brand" href="#"><img src="../img/core-img/kspg_india_logo.png" alt="KSPG India Logo" height="100" width="100"></a>-->
<!---->
                    <!-- Navbar Toggler -->
<!--                    <div class="classy-navbar-toggler">-->
<!--                        <span class="navbarToggler"><span></span><span></span><span></span></span>-->
<!--                    </div>-->
<!---->
                    <!-- Menu -->
<!--                    <div class="classy-menu">-->
<!---->
                        <!-- close btn -->
<!--                        <div class="classycloseIcon">-->
<!--                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>-->
<!--                        </div>-->
<!---->
                        <!-- Nav Start -->
<!--                        <div class="classynav">-->
<!--                            <ul>-->
<!--                                <li class="active"><a href="#">Welcome - --><?php //echo $_SESSION["email"]; ?><!--</a></li>-->
<!--                            </ul>-->
<!---->
<!---->
                            <!-- Video Post Button -->
<!--                            <div class="add-post-button">-->
<!--                                <a href="logout.php" class="btn add-post-btn">Log Out</a>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
                        <!-- Nav End -->
<!--                    </div>-->
<!--                </nav>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->
<!-- ##### Header Area End ##### -->
<!--<div class="h-divider">-->
<!--<button onclick="window.location.href='logout.php'" name="logout" >Log Out</button>-->
<!--<h1 class="text-center">Welcome --><?php //echo $_SESSION["email"]; ?><!--</h1>-->
<!--<p class="text-center"><a href="logout.php" >Click Here to logout</a></p>-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">KSPG India - Utkarsh</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            </div>
            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <div class="pull-right">
                <ul class="nav navbar-nav">
                    <li><button type="submit" class="btn navbar-btn btn-danger" name="logout" id="logout"  value="Log Out" onclick="window.location.href='logout.php'" name="logout">Log Out</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3>Navbar With Dropdown</h3>
        <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>
    </div>
<!-- jQuery -->
<!--<script src="//code.jquery.com/jquery.js"></script>-->
<!-- Bootstrap JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="Hello World"></script>
</div>
</body>
</html>