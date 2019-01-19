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

<!--NavBar Starts-->
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
                <li class="active"><a href="#"><button>Home</button></a></li>
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
                    <button type="submit" class="btn btn-default">Search</button>
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

<!--Button Scripts Start-->
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("#div1").load("demo_test.txt");
        });
    });
</script>
<!--Button Scripts End-->
<!--NavBar Ends-->
<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
<!-- Footer -->
<section class="footer fixed-bottom">
    <div class="container-fluid">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                    <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            </hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p><u><a href="https://www.kspgindia.com/" target="_blank">KSPG India</a></u> is a Registered MSP/ISO of Kushal Swadesh Pratistha Group</p>
                <p class="h6">&copy All right Reversed. <a class="text-green ml-2" href="https://www.kspgindia.com" target="_blank">KSPG Technology Support Group</a></p>
            </div>
            </hr>
        </div>
    </div>
</section>
<!-- ./Footer -->

</body>
</html>