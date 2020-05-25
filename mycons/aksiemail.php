<?php
session_start();

if(isset($_SESSION["confirmation"])){
    header("Location: confirmation.php");
}
include("configonline.php");

$cart=$_SESSION['cart_id'];
if(isset($_SESSION["nama"])){
    header("Location: homepagelogin.php");
}
$email=$_POST["email"];
$updateemail=mysqli_query($con,"update cart set user_temp_id='$email' where cart_id='$cart';");
header("Location: confirmation.php");

?>