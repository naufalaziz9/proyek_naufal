<?php
 session_start();
 session_regenerate_id();

 include("configonline.php");
$username = $_POST['emaillogin'];
$password = $_POST['passwordlogin'];
 
$query = mysqli_query($con,"select email,`password`,nama from `user` where email='$username' or nama='$username' and `password`='".sha1($password)."'");
$cek = mysqli_num_rows($query);
$tampung=mysqli_fetch_assoc($query);

if($cek>0){
    echo ' <script>
    alert("Selamat datang $username")
    window.location="login.php"
    </script>';
   header("Location: homepagelogin.php");
    $_SESSION['email']=$tampung["email"];
    $_SESSION["nama2"]=$tampung["nama"];
   $_SESSION["nama"]=$username;
}else{
    echo '<script>
    alert ("Username atau password anda salah");
    window.location="login.php";
    </script>';
}


?>