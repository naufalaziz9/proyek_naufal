<?php
include("../configonline.php");
$dropdown=mysqli_query($con,"SELECT genre FROM produk p  group by genre ;");
$dropdown2=mysqli_query($con,"SELECT kota FROM produk p group by kota;");
$dropdown3=mysqli_query($con,"SELECT * FROM kategori k;");
$total=mysqli_query($con,"select produk_id, nama_produk, tanggal, stok, kota, jam, genre from produk ");
$genre = $kota = "";

if($_GET){
if(isset($_GET['jenis'])){
  $genre=" and genre $_GET[jenis]";
  
}
if(isset($_GET['kota'])){
  $kota=" and kota='$_GET[kota]'";
  // $dropdown=mysqli_query($con,"SELECT genre FROM produk p  where kota='$_GET[kota]' group by genre ;");
  
  
}
if(isset($_GET['kategori'])){
 
  $kategori=" and kategori_id $_GET[kategori]";

}

$query_utama = "select produk_id, nama_produk, tanggal, stok, kota, jam, genre from produk where stok>0".$genre.$kota.$kategori;
$total=mysqli_query($con,$query_utama);

};

?>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">
  <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/dashboard/">

  <title>Dashboard Template for Bootstrap</title>


</head>

<body>
  <?php echo include('logo.html');?>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">MyCons Est. 2019</a>
      </div>

    </div>
  </nav>
  <div id='a'>

  </div>
  <div class="container-fluid">
    <div class="row">
      <?php include("sidebar.php")?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="position: relative;margin-top:-750px">
        <h1 class="page-header">Produk</h1>

        <!-- <form action="" method="GET"> -->
        <form action="" method="GET">
          <div class="col-md-4 "  style="position: relative;left: 0px;">


          <h3>KOTA</h3>


            <?php  while ($tampung2=mysqli_fetch_assoc($dropdown2)): ?>
            <input  type="radio" style="display:inline;"  onclick="kerja()" name="kota" value="<?php echo $tampung2['kota'] ?>">
            <?php echo $tampung2['kota'] ?><br>
            <?php endwhile ;?>
            <?php  if(isset($_GET['kota'])){ ?>
            <h4>kota pilihan anda adalah <?php echo $_GET["kota"]?> </h4>
            <?php }; ?>
    

          </div>
        <!-- </form> -->


      

          <div class=" col-md-4 " style="position: relative;left:0px;height:200px;display:inline;">


          <h3>GENRE</h3>

            <select name="jenis" id="">
                            <option value="!=''">GENRE</option>
                            <?php while ($tampung=mysqli_fetch_assoc($dropdown)): ?>
                                <option value="='<?php echo $tampung['genre'] ?>'"> <?php echo $tampung['genre'] ?></option>
                                <?php endwhile ;?>
                            </select>


          </div>

          <div class="col-md-4" style="position: relative;left: 0px;">

          <h3>KATEGORI</h3>
        



            <select name="kategori" id="">
                            <option value="!=''">KATEGORI</option>
                            <?php while ($tampung2=mysqli_fetch_assoc($dropdown3)): ?>
                                <option value="='<?php echo $tampung2['kategori_id'] ?>'"> <?php echo $tampung2['nama_kategori'] ?></option>
                                <?php endwhile ;?>
                            </select>
          </div>

        
          <button style="width:100px;height:50px;margin-left:80%" type="submit">Cari</button>
        </form>
        <a href="musik.php"><button>reset kota</button></a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>

                <th>Tanggal</th>
                <th>Stok</th>
                <th>Kota</th>
                <th>Jam</th>

                <th>Genre</th>
              </tr>
            </thead>
            <tbody>
              <?php while($tampung=mysqli_fetch_assoc($total)): ?>
              <tr>
                <td><?php echo $tampung['produk_id']   ?></td>
                <td><?php echo $tampung['nama_produk']   ?></td>


                <td><?php echo $tampung['tanggal']   ?></td>
                <td><?php echo $tampung['stok']   ?></td>
                <td><?php echo $tampung['kota']   ?></td>
                <td><?php echo $tampung['jam']   ?></td>


                <td><?php echo $tampung['genre']   ?></td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>

  <!-- Bootstrap core JavaScript
        ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="../../assets/js/vendor/holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

  <script src="../assets/script/jquery-3.4.1.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.js"></script>
  <script src="script.js"></script>
</body>

</html>