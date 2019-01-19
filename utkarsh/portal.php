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
    <link rel="stylesheet" href="style_portal.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


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
    <nav class="navbar navbar-default">
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

        </div>
    </nav>

<div class="container-fluid">
    <h3>Navbar With Dropdown</h3>
    <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>
</div>


<footer id="footer" class="clearfix">
    <div id="footer-widgets">

        <div class="container">

            <div id="footer-wrapper">

                <div class="row">
                    <div class="col-sm-6 col-md-2">
                        <div id="meta-3" class="widget widgetFooter widget_meta">
                            <h4 class="widgettitle">Importent Page :</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
                                <li><a href="privacypolicy.php"><i class="fa fa-link"></i>   Privacy Policy</a></li>
                                <li><a href="#"><i class="fa fa-envelope fa-fw"></i> Contact Us</a></li>
                            </ul>
                        </div>      </div> <!-- end widget1 -->

                    <div class="col-sm-6 col-md-2">
                        <div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
                            <h4 class="widgettitle">Our social media :</h4>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/mr.dauod" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/ayatquranCom" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                                </li>
                                <li>
                                    <a href="http://www.youtube.com/user/sonsofye" target="_blank"><i class="fa fa-youtube"></i> Youtube</a>
                                </li>
                            </ul>
                        </div>            </div> <!-- end widget1 -->

                    <div class="col-sm-6 col-md-4">
                        <div id="meta-4" class="widget widgetFooter widget_meta">
                            <h4 class="widgettitle">Subscribe :</h4>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">E-mail :</span>
                                    <input class="form-control" placeholder="Write your email .." type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Phone  :</span>
                                    <input class="form-control" placeholder="+96777000000" type="text">
                                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Subscribe !</button>
                  </span>
                                </div>
                            </div>


                        </div>
                    </div> <!-- end widget1 -->

                    <div class="col-sm-6 col-md-4">
                        <div id="search-3" class="widget widgetFooter widget_search"><h4 class="widgettitle">Search in Faploo :</h4>

                            <div class="form-group">
                                <label class="control-label">Write what you want to search for it  :</label>
                                <div class="input-group">
                                    <span class="input-group-addon">Keyword :</span>
                                    <input class="form-control" placeholder="Keyword for search ..." type="text">
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">Search !</button>
                                  </span>
                                </div>
                            </div>

                        </div>            </div> <!-- end widget1 -->

                </div> <!-- end .row -->

            </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
    </div> <!-- end #footer-widgets -->

    <div id="sub-floor">
        <div class="container">
            <div class="row">
                <div class="col-md-4 copyright">
                    Copy right for Faploo © 2015
                </div>
                <div class="col-md-4 col-md-offset-4 attribution">
                    Developer by  <a target="_blank" href="#">Faploo team</a> .
                </div>
            </div> <!-- end .row -->
        </div>
    </div>

</footer>

</body>
</html>