<?php

require_once('db.php');

$_SESSION["jeniskursi"]=$_GET["kursi"];
// $con=mysqli_connect("localhost","root","","mycons"); //sesuaikan dengan password dan username mysql anda
$total=mysqli_query($con,"select kursi_id,produk_id,harga from kursi where kursi_id='$_GET[kursi]'");
$cek=mysqli_fetch_assoc($total);
$jumlah=$_SESSION["tes"];

// $sid = session_id();
//  $cmd_cart= "select * from cart where user_temp_id=$sid";
//  $sql_cart= mysqli_query($con,$cmd_cart);
//  $row_cart= mysqli_fetch_assoc($sql_cart);
// $id_cart=$row_cart[id]; 
//di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
$sql = mysqli_query($con,"SELECT c.cart_id, cp.produk_id,c.user_temp_id,c.harga_total,cp.jumlah,cp.kursi_id FROM cart_produk cp,cart c WHERE  cp.cart_id=c.cart_id and cp.produk_id='$cek[produk_id]' AND c.user_temp_id='$sid'and kursi_id='$_GET[kursi]'");

$ketemu=mysqli_num_rows($sql);

if ($ketemu==0){
    // kalau barang belum ada, maka di jalankan perintah insert
    $tes=mysqli_query($con,"INSERT INTO cart_produk (produk_id, jumlah, cart_id,kursi_id,subtotal)
            VALUES ('$cek[produk_id]', '1', '$_SESSION[cart_id]','$_GET[kursi]','$cek[harga]');");
           
    $harga=mysqli_query($con,"update cart c inner join kursi k inner join cart_produk cp
        set c.harga_total= c.harga_total + k.harga
        where c.cart_id=cp.cart_id and cp.kursi_id=k.kursi_id and cp.kursi_id='$_GET[kursi]' and cp.cart_id='$_SESSION[cart_id]';");
        echo"masuk cok";



        $cart=$_SESSION['cart_id'];
        $pembayaranjumlah=mysqli_query($con,"select count(pembayaran_id)+1 as 'aa' from pembayaran;");
        $tampung=mysqli_fetch_assoc($pembayaranjumlah);
        $pembayaranid="pb".$tampung['aa'];

       var_dump($tampung);
      
        $tanggal=date("Y-m-d");

        $cekdata=mysqli_query($con,"select * from pembayaran where cart_id='$cart';");
        $cek = mysqli_num_rows($cekdata);

        if($cek==0){
            echo"ddd";
           
 $jp5="jp5";
             $pembayaranupdate=mysqli_query($con,"insert into pembayaran values('$pembayaranid','$cart','$jp5','s3','2019-12-13');");
             $update=mysqli_query($con,"update pembayaran set jenis_pembayaran_id='jp5' where cart_id='$cart';");
         var_dump($pembayaranupdate);
             
                };
    


        header('Location:chart.php');
} else {
    //  kalau barang ada, maka di jalankan perintah update
//     $tes2=mysqli_query($con,"UPDATE cart_produk
//             SET jumlah = jumlah + 1
//             WHERE cart_id ='$_SESSION[cart_id]' AND produk_id='$cek[produk_id]' and kursi_id='$_GET[kursi]'"); 
//             $harga=mysqli_query($con,"update cart c inner join kursi k inner join cart_produk cp
//             set c.harga_total= c.harga_total + k.harga
//             where c.cart_id=cp.cart_id and cp.kursi_id=k.kursi_id and cp.kursi_id='$_GET[kursi]' and cp.cart_id='$_SESSION[cart_id]';");
           
//              echo"wes onok cok"; 

echo '<script>
   alert ("Barang sudah tersedia di keranjang");
   window.location="music.php";
   </script>';

  
        
}   



?>

