<?php

$q = $_GET["q"];
echo "Showing Website Visitors for ".$q;

$con=mysqli_connect("localhost","rahulpan_admin","rp1995","rahulpan_kspg");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM rahulpan_kspg.visitors where visit_date = '".$q."'");

echo "<table border='1'>
<tr>
<th>Visitor No</th>
<th>Date</th>
<th>Time</th>
<th>IP</th>
<th>ISP</th>
<th>Organisation</th>
<th>Longitude</th>
<th>Latitude</th>
<th>Country Code</th>
<th>Country Name</th>
<th>Continent Code</th>
<th>Currency Code</th>
<th>Currency Name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['visitor_no'] . "</td>";
    echo "<td>" . $row['visit_date'] . "</td>";
    echo "<td>" . $row['visit_time'] . "</td>";
    echo "<td>" . $row['ip'] . "</td>";
    echo "<td>" . $row['isp'] . "</td>";
    echo "<td>" . $row['org'] . "</td>";
    echo "<td>" . $row['longitude'] . "</td>";
    echo "<td>" . $row['latitude'] . "</td>";
    echo "<td>" . $row['country_code'] . "</td>";
    echo "<td>" . $row['country_name'] . "</td>";
    echo "<td>" . $row['continent_code'] . "</td>";
    echo "<td>" . $row['currency_code'] . "</td>";
    echo "<td>" . $row['currency_name'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
