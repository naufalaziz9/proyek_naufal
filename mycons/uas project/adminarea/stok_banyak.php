<?php
include("../configonline.php");
$dropdown=mysqli_query($con,"SELECt nama_kategori
FROM produk p, kategori k
where p.kategori_id = k.kategori_id
group by nama_kategori
order by stok desc
;");
$dropdown2=mysqli_query($con,"SELECt kota
FROM produk p, kategori k
where p.kategori_id = k.kategori_id
group by kota
order by stok desc
;");
$dropdown3=mysqli_query($con,"SELECT genre FROM produk p  group by genre ;");

$total=mysqli_query($con,"SELECt produk_id, nama_produk, nama_kategori,tanggal, stok, kota, jam, genre
FROM produk p, kategori k
where p.kategori_id = k.kategori_id
order by stok desc;
");

// if(isset($_GET['kat'])){

//   $total=mysqli_query($con,"SELECt produk_id, nama_produk, nama_kategori,tanggal, stok, kota, jam, genre
//   FROM produk p, kategori k
//   where p.kategori_id = k.kategori_id and nama_kategori='$_GET[kat]'
//   order by stok desc;
//   ");

// }
// elseif(isset($_GET['kota'])){

//   $total=mysqli_query($con,"SELECt produk_id, nama_produk, nama_kategori,tanggal, stok, kota, jam, genre
//   FROM produk p, kategori k
//   where p.kategori_id = k.kategori_id and kota='$_GET[kota]'
//   order by stok desc;
//   ");

// }

if($_GET){
  if(isset($_GET['kat'])){
    $kategori=" and nama_kategori='$_GET[kat]'";
    
  }
  if(isset($_GET['kota'])){
    $kota=" and kota$_GET[kota]";

  }
  if(isset($_GET['jumlah'])){
   
    $jumlah=" order by stok $_GET[jumlah]";
  
  }
  
  $query_utama = "SELECt produk_id, nama_produk, nama_kategori,tanggal, stok, kota, jam, genre
  FROM produk p, kategori k
  where p.kategori_id = k.kategori_id
  ".$kategori.$kota.$jumlah;
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
  <div class="container-fluid" >
    <div class="row">
      <?php include("sidebar.php")?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="position: relative;top:-650px">
        <h1 class="page-header">list stok barang</h1>
        <form action="" method="get">
          <div class="col-md-4 " style="position: relative;">


<h3>kota</h3>

            <select name="kota" id="">
              <option value="!=''">kota</option>
              <?php while ($tampung2=mysqli_fetch_assoc($dropdown2)): ?>
              <option value="='<?php echo $tampung2['kota'] ?>'"> <?php echo $tampung2['kota'] ?></option>
              <?php endwhile ;?>
            </select>
          </div>


          <div class=" col-md-4 " style="position: relative">
<h3>kategori</h3>
            <div class="btn-group" role="group">
              <?php while ($tampung=mysqli_fetch_assoc($dropdown)): ?>
              <input name="kat" type="radio"
                value=<?php echo $tampung['nama_kategori'] ?>><?php echo $tampung['nama_kategori'] ?><br></input>
              <?php endwhile ;?>



            </div>

          </div>
          <div class="col-md-4" style="">
            <div class="btn-group" role="group">
<h3>stok</h3>

              <select name="jumlah">

                <option value='asc'>stok terkecil</option>
                <option value='desc'> stok terbesar</option>
              </select>

            </div>

          </div>
          <button style="width:100px;height:50px;margin-left:70%;margin-top:100px" type="submit">Cari</button>

     

      </form>




      <div class="table-responsive col-md-12" style="position: relative;">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID Produk</th>
              <th>Nama Produk</th>
              <th>Kategori </th>
              <th>Tanggal</th>
              <th>Stok</th>
              <th>Kota </th>
              <th>Jam</th>
              <th>Genre</th>
            </tr>
          </thead>
          <tbody>
            <?php while($tampung=mysqli_fetch_assoc($total)): ?>
            <tr>
              <td><?php echo $tampung['produk_id']   ?></td>
              <td><?php echo $tampung['nama_produk']   ?></td>
              <td><?php echo $tampung['nama_kategori']   ?></td>

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
  </div>

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