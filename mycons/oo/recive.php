<?php
 
$con=mysqli_connect("localhost","root","","mycons"); //sesuaikan dengan password dan username mysql anda
$username = $_POST['emaillogin'];
$password = $_POST['passwordlogin'];
 
$query = mysqli_query($con,"select email,`password` from `user` where email='$username' and `password`='$password'");
$cek = mysqli_num_rows($query);
if($cek=1){
   
   header("Location: homepagelogin.php");
}elseif($cek=0){
    header("Location: index.php");
}


?>