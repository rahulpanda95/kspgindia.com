<?php

$servername = "rahulpanda.in:3306";
$username = "rahulpan_admin";
$password = "rp1995";
$dbname = "rahulpan_kspg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$date = $_POST['pdate'];
$time = $_POST['ptime'];
$ip = $_POST['visitor_ip'];
$isp = $_POST['visitor_isp'];
$org = $_POST['visitor_org'];
$longitude = $_POST['visitor_longitude'];
$latitude = $_POST['visitor_latitude'];
$country_code = $_POST['visitor_country_code'];
$country_name = $_POST['visitor_country_name'];
$continent_code = $_POST['visitor_continent_code'];
$currency_code = $_POST['visitor_currency_code'];
$currency_name = $_POST['visitor_currency_name'];

$sql = "INSERT INTO rahulpan_kspg.visitors (visit_date, visit_time, ip, isp, org, longitude, latitude, country_code, country_name, continent_code, currency_code, currency_name)
VALUES ('$date','$time','$ip','$isp','$org','$longitude','$latitude','$currency_code','$country_name','$continent_code','$currency_code','$currency_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

