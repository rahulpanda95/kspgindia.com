<?php
session_start(); //Start the session

// Connect To The database
$dbconx=mysqli_connect("localhost","rahulpan_admin","rp1995","rahulpan_kspg") OR
die("can't connect to database");

if (isset($_POST["submit"])) {
    // Fetch User details sent
    $email=$_POST["email"];
    $password=$_POST["password"];
    // Check if user input is blank

    if ($email=="" || $password=="") {
        echo "Empty Details";
        exit();

    } else {
        // Fetch user details
        $result = mysqli_query($dbconx,"SELECT empid,email FROM rahulpan_kspg.emp_credentials WHERE email='$email' and password = '$password' LIMIT 1");
        if (mysqli_num_rows($result)>0) {
            // Create Sessions and redirect user to homepage
            $_SESSION["email"] = $email;
            header("Location:portal.php");
        } else {
            echo "User Not Found Try Again";
            exit();
        }

    }



} 
?>