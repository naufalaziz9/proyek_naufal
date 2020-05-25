<?php



if(isset($_GET['q'])){
    echo "Ada ".$_GET['q'];
} else {
    echo "Tidak ada Q";
}



include("configonline.php");
if(isset($_SESSION["nama"])){
    $home= "homepagelogin.php";}
     else{
   $home="index.php";
     }
$dataperhalaman=5;
$total=mysqli_query($con,"select * from produk where kategori_id='k1'");
$totaldata= mysqli_num_rows($total);

$jumlahhalaman= ceil($totaldata/$dataperhalaman);

   if( isset($_GET["halaman"])){
       $halamanaktif=$_GET["halaman"];
   }else{
       $halamanaktif=1;
   }


$awaldata=($dataperhalaman*$halamanaktif)-$dataperhalaman;
if( isset($_GET["jenis"])){
    $query = mysqli_query($con,"select a.nama_produk,a.gambar,min(b.harga)
    from (select *from produk where kategori_id='k1') a,kursi b
    where a.produk_id=b.produk_id and genre='$_GET[jenis]'
    group by a.nama_produk
    limit $awaldata,$dataperhalaman
    ");
    $querytotalbyjenis = mysqli_query($con,"select a.nama_produk,a.gambar,min(b.harga)
    from (select *from produk where kategori_id='k1') a,kursi b
    where a.produk_id=b.produk_id and genre='$_GET[jenis]'
    group by a.nama_produk
   
    ");
    $totaldata= mysqli_num_rows($querytotalbyjenis);
    $jumlahhalaman= ceil($totaldata/$dataperhalaman);

}else{
    echo "Masuk sini";
    $query = mysqli_query($con,"select a.nama_produk,a.gambar,min(b.harga)
    from produk a,kursi b
    where a.produk_id=b.produk_id and a.kategori_id='k1'
    group by a.nama_produk
    limit $awaldata,$dataperhalaman
    ");
}

if(isset($_SESSION["nama"])){
 $home= "homepagelogin.php";}
  else{
$home="index.php";
  }


?>