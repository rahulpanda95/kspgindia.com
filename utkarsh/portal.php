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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

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

<!--footer starts from here-->
<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                <!--headin5_amrc-->
                <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
                <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
                <p><i class="fa fa fa-envelope"></i> info@example.com  </p>


            </div>


            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="http://kalarikendramdelhi.com">Image Rectoucing</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Clipping Path</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Hollow Man Montage</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Ebay & Amazon</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Hair Masking/Clipping</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Image Cropping</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>


            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="http://kalarikendramdelhi.com">Remove Background</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Shadows & Mirror Reflection</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Logo Design</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Vectorization</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Hair Masking/Clipping</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Image Cropping</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>


            <div class=" col-sm-4 col-md  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                <!--headin5_amrc ends here-->

                <ul class="footer_ul2_amrc">
                    <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                    <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                    <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                </ul>
                <!--footer_ul2_amrc ends here-->
            </div>
        </div>
    </div>


    <div class="container">
        <ul class="foote_bottom_ul_amrc">
            <li><a href="http://kalarikendramdelhi.com">Home</a></li>
            <li><a href="http://kalarikendramdelhi.com">About</a></li>
            <li><a href="http://kalarikendramdelhi.com">Services</a></li>
            <li><a href="http://kalarikendramdelhi.com">Pricing</a></li>
            <li><a href="http://kalarikendramdelhi.com">Blog</a></li>
            <li><a href="http://kalarikendramdelhi.com">Contact</a></li>
        </ul>
        <!--foote_bottom_ul_amrc ends here-->
        <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>

        <ul class="social_footer_ul">
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-twitter"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <!--social_footer_ul ends here-->
    </div>

</footer>

</body>
</html>