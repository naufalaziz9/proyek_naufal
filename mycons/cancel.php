<?php
session_start();
include("configonline.php");
$_SESSION["cancel"]=1;
$update=mysqli_query($con,"update pembayaran set status_id='s4' where cart_id='$_SESSION[cart_id]';");
session_regenerate_id();
if(isset($_SESSION['nama'])){
    header("Location:homepagelogin.php");
}else{
    header("Location:index.php");
}



?>