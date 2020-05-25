<?php
include("../configonline.php");

    
    if(isset($_GET['jenis'])){
      $genre=" and genre='$_GET[jenis]'";
      echo "ddd";
    }
    if(isset($_GET['kota'])){
      $kota=" and kota='$_GET[kota]'";
      echo "kota";
    }
    $query_utama = "select produk_id, nama_produk, tanggal, stok, kota, jam, genre from produk where kategori_id='k1'".$genre.$kota;
    $total=mysqli_query($con,$query_utama);
    echo "ddd";
    
    header("Location: musik.php?jenis=$_GET[jenis]?kota=$_GET[kota]");

?>