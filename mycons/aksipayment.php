
<?php
session_start();
include("configonline.php");
$_SESSION['choose']=1;
$cart=$_SESSION['cart_id'];
$jenispembayaran=$_POST['jp'];
if($jenispembayaran == ""){
$update=mysqli_query($con,"update pembayaran set jenis_pembayaran_id='jp5' where cart_id='$cart';");}else{
$update=mysqli_query($con,"update pembayaran set jenis_pembayaran_id='$jenispembayaran' where cart_id='$cart';");};
    if(isset($_SESSION["nama"])){
        header("Location:confirmation.php");
    }else{
        
        header("Location:inputemail.php");
    }


?>