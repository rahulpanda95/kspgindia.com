<?php

$con=mysqli_connect('localhost','rahulpan_admin','rp1995','rahulpan_kspg');

if(!$con)
{
    die(' Please Check Your Connection'.mysqli_error($con));
}
?>