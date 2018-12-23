<?php

$servername = "localhost";
$username = "rahulpan_admin";
$password = "rp1995";
$dbname = "rahulpan_kspg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$date = $_GET['pdate'];
$time = $_GET['ptime'];
$ip = $_GET['visitor_ip'];
$isp = $_GET['visitor_isp'];
$org = $_GET['visitor_org'];
$longitude = $_GET['visitor_longitude'];
$latitude = $_GET['visitor_latitude'];
$country_code = $_GET['visitor_country_code'];
$country_name = $_GET['visitor_country_name'];
$continent_code = $_GET['visitor_continent_code'];
$currency_code = $_GET['visitor_currency_code'];
$currency_name = $_GET['visitor_currency_name'];

$sql = "INSERT INTO rahulpan_kspg.visitors (visit_date, visit_time, ip, isp, org, longitude, latitude, country_code, country_name, continent_code, currency_code, currency_name)
VALUES ('$date','$time','$ip','$isp','$org','$longitude','$latitude','$country_code','$country_name','$continent_code','$currency_code','$currency_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "<script>window.close();</script>";
?>

