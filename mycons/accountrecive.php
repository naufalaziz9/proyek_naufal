<?php
session_start();
include("configonline.php");

$oldpass = $_POST['oldpassname'];
$newpass = $_POST['newpassname'];
$retpass = $_POST['retpassname'];


$savepass = mysqli_query($con,"select `password` from `user` u where u.email='$_SESSION[nama]';");
$assocpass = mysqli_fetch_assoc($savepass);

if ($oldpass == sha1($assocpass['`password`'])) {

    if ($newpass == $retpass){
        $ubahpass = mysqli_query($con, "update `user` SET password='".sha1($newpass)."' WHERE email='$_SESSION[nama]';");
        echo '<script>
        alert ("Berhasil diubah");
        window.location="account.php";
        </script>';
    } else{
        echo '<script>
        alert ("Kata sandi anda tidak sama");
        window.location="account.php";
        </script>';
    }

}  else{
    echo '<script>
    alert ("Kata sandi anda salah");
    window.location="account.php";
    </script>';
}

//PERSONAL DETAILS


/*function cekoldpass() {
    for ($i = 1; $i <= $rowpass; $i++) {
        if($oldpass!=$cekpass->$i) {
            //echo("Password anda salah, harap ulangi lagi");
            echo '<script>
            alert ("email atau username Sudah Ada Yang Menggunakan");
            window.location="account.php";
            </script>';

            die;
        
    }*/

    

//}


?>