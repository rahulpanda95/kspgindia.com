<?php

session_start();
// If Session not set send user to login page
if (isset($_SESSION["email"])) {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Utkarsh Portal - KSPG India</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">

        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
            text-align: center;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }


    </style>

</head>

<body>

<img class="center" src="https://kspgindia.com/img/core-img/kspg_India_resized" alt="KSPG India">
<h2 align="center">Utkarsh - The Awakening</h2>
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Breaking News Area -->
                        <div class="top-breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Hello Dear Friend</a></li>
                                    <li><a href="#">Welcome to our website!</a></li>
                                    <li><a href="#">Introducing Kushal Swadesh Pratistha Group - KSPG India</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Social Info Area-->
                        <div class="top-social-info-area">
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="https://www.facebook.com/kspgindia/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="viral-news-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="viralnewsNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="https://kspgindia.com/"><img src="img/core-img/kspg_india_logo.png" alt="KSPG India Logo" height="100" width="100"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="https://kspgindia.com/">Where We Stand</a></li>
                                <li><a href="#">Industries</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="https://kspgindia.com/ks_homemade_products"><p style="color: #2d5f9a"><strong>KS Home-made Products</strong></p></a></li>
                                            <li><a href="https://kspgindia.com/ks_hmp_products">Products</a></li>
                                            <li><a href="https://kspgindia.com/ks_hmp_health_tips">Health Tips</a></li>
                                            <li><a href="https://kspgindia.com/ks_homemade_products">Place Orders</a></li>
                                            <li><a href="https://kspgindia.com/ks_homemade_products">Enroll as Distributor</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="https://www.kspgindia.com/kspg_publication"><p style="color: #2d5f9a"><strong>KSPG Publication</strong></p></a></li>
                                            <li><a href="https://kspgindia.com/kspg_publication_books">Books</a></li>
                                            <li><a href="https://kspgindia.com/">Authors</a></li>
                                            <li><a href="https://kspgindia.com/">Place Orders</a></li>
                                            <li><a href="https://kspgindia.com/">Publish with Us</a></li>
                                            <li><a href="https://kspgindia.com/">Enroll as Distributor</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="https://kspgindia.com/ks_media_group"><p style="color: #2d5f9a"><strong>KS Media Group</strong></p></a></li>
                                            <li><a href="https://youtube.com/c/kspgindia" target="_blank">YouTube Channel</a></li>
                                            <li><a href="https://www.youtube.com/watch?v=hqLSOHj6rRU&list=PLVc6F6db-kZBkGkj6ImYmdqD_6kshZHu5" target="_blank">Sarita Videos</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><p>Section to be disclosed soon</p></li>
                                            <!-- <li><a href="catagory.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Article</a></li>
                                            <li><a href="quize-article.html">Quize Article</a></li>
                                            <li><a href="contact.html">Contact</a></li> -->
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="https://kspgindia.com/our_team">Our Team</a></li>
                                <li><a href="#">Discover</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Envision the Next</a>
                                            <ul class="dropdown">
                                                <li><p>Section under Construction</p></li>
                                                <!-- <li><a href="single-post.html">Single Article</a></li>
                                                <li><a href="quize-article.html">Quize Article</a></li>
                                                <li><a href="contact.html">Contact</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="https://www.rediffmailpro.com/cgi-bin/login.cgi" target="_blank">Employee Mail</a></li>
                                        <li><a href="https://workplace.facebook.com/login/" target="_blank">KSPG Workplace</a></li>
                                        <li><a href="http://webex.kspgindia.com" target="_blank">Webex Meetings</a></li>
                                        <!-- <li><a href="quize-article.html">Reach Us</a></li>
                                        <li><a href="contact.html">Contact</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="https://www.kspgindia.com/reach_us">Reach Us</a></li>

                            </ul>

                            <!-- Search Button -->
                            <div class="search-btn">
                                <i id="searchbtn" class="fa fa-search" aria-hidden="true"></i>
                            </div>

                            <!-- Search Form -->
                            <div class="viral-search-form">
                                <form id="search" action="#" method="get">
                                    <input type="text" name="search-terms" placeholder="Enter your keywords ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Video Post Button -->
                            <div class="add-post-button">
                                <a href="https://www.facebook.com/kspgindia/" target="_blank" class="btn add-post-btn">KSPG India @Facebook</a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<div class="container">
    <form class="form-signin" method="POST" action="login_script.php">
        <label for="inputEmail" class="sr-only">Enter you E-mail ID here</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Enter Password Here</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Log in</button>
    </form>

</div> <!-- /container -->


<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>