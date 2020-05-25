<?php
$ip_server= $_SERVER['SERVER_ADDR'];


if(($ip_server=='127.0.0.1')||($ip_server=="::1")){
    $con=mysqli_connect("localhost","root","","mycons"); //sesuaikan dengan password dan username mysql anda



} else {
    $base_url="http://mycons.xyz";
    $con=mysqli_connect("localhost","root","Bevan hebat10","mycons3"); //sesuaikan dengan password dan username mysql anda
    // Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
}


?>