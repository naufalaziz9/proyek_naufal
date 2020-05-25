<?php
session_start();
$ip_server= $_SERVER['SERVER_ADDR'];


if(($ip_server=='127.0.0.1')||($ip_server=="::1")){
    $con=mysqli_connect("localhost","root","","mycons"); //sesuaikan dengan password dan username mysql anda



} else {
    $base_url="http://mycons.xyz";
    $con=mysqli_connect("localhost","root","Bevan hebat10","mycons3"); //sesuaikan dengan password dan username mysql anda
}
$sid = session_id();
$_SESSION['sid']=$sid;
// var_dump($sid);
// $jumlahbaris=mysqli_query($con,"SELECT * FROM cart c;");
// $tampung=mysqli_num_rows($jumlahbaris);
$cmd_cart= "select cart_id from cart where user_temp_id='$sid'";
$sql_cart= mysqli_query($con,$cmd_cart);
// $row_cart= mysqli_fetch_assoc($sql_cart);
$sql_baris= mysqli_num_rows($sql_cart);

if($sql_baris ==0){
    $query2 = mysqli_query($con,"select count(cart_id) as 'cartid' from cart;");
    $data  = mysqli_fetch_array($query2);
    
    
    $kodeBarang = $data['cartid'];
    
    $noUrut = $kodeBarang;
    
    // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
    $noUrut++;
    
    
    
    // membentuk kode anggota baru
    // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
    // misal sprintf("%03s", 12); maka akan dihasilkan '012'
    // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
    $char = "c";

    $newID = $char."".$noUrut;

  
    $_SESSION['cart_id'] = $newID;
    if(isset($_SESSION['nama'])){
        $userid=mysqli_query($con,"SELECT * FROM `user` u where email='$_SESSION[nama]';");
        $user_idtampung=mysqli_fetch_assoc($userid);
        $cmd_insert_cart= "insert into cart(cart_id,user_temp_id,harga_total,user_id) values ('$newID','$sid',0,'$user_idtampung[user_id]')";

    }else{
         $cmd_insert_cart= "insert into cart(cart_id,user_temp_id,harga_total,user_id) values ('$newID','$sid',0,'u000');";
    }

    $sql_insert_cart=mysqli_query($con,$cmd_insert_cart);
   
}else{
    if(isset($_SESSION['nama'])){
        $userid=mysqli_query($con,"SELECT * FROM `user` u where email='$_SESSION[nama]';");
        $user_idtampung=mysqli_fetch_assoc($userid);
        $cmd_insert_cart2= mysqli_query($con,"update cart set user_id='$user_idtampung[user_id]' where cart_id='$sid';");
      

    }
   

   
}


?>