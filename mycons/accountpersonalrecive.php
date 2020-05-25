<?php
session_start();
$email=$_SESSION["nama"];
include("configonline.php");
$newname = $_POST['namanya'];
$newadd = $_POST['addressnya'];
$newemail = $_POST['emailnya'];
$newphone = $_POST['phonenya'];


$ubahsemua = mysqli_query($con, "update `user` set nama='$newname', alamat='$newadd', email='$newemail', no_telp='$newphone' 
where email='$email';"); 
// $ubahname = mysqli_query($con, "update `user` set nama='$newname' where email='$email';");
// $ubahadd = mysqli_query($con, "update `user` set alamat='$newadd' where email='$email';");
// $ubahemail = mysqli_query($con, "update `user` set email='$newemail' where email='$email';");
// $ubahphone = mysqli_query($con, "update `user` set no_telp='$newphone' where email='$email';");
$_SESSION["nama"]=$newemail;
echo ' <script>
    alert("Berhasil diubah")
    window.location="account.php"
    </script>';
?>