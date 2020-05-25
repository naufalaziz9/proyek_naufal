<?php
include("../configonline.php");
$dropdown=mysqli_query($con,"SELECt nama_kategori,k.kategori_id
FROM produk p, kategori k
where p.kategori_id = k.kategori_id
group by nama_kategori
order by stok desc
;");

$total=mysqli_query($con,"select nama,c.cart_id,nama_produk,jumlah,kursi,subtotal
from cart_produk cp, kursi k,produk p,`user` u,cart c
where cp.produk_id=p.produk_id and cp.kursi_id=k.kursi_id and u.user_id=c.user_id and c.cart_id=cp.cart_id
order by jumlah desc;
  ");


// if(isset($_GET['kat'])){

//   $total=mysqli_query($con,"select cart_id,nama_produk,jumlah,kursi,subtotal
//   from cart_produk cp, kursi k,produk p,kategori kk
//   where cp.produk_id=p.produk_id and cp.kursi_id=k.kursi_id and nama_kategori = '$_GET[kat]' and p.kategori_id=kk.kategori_id
//   order by jumlah desc;
//   ");

// }
if($_GET){
  if(isset($_GET['jenis'])){
    $jenis=" and p.kategori_id='$_GET[jenis]'";
    
  }
  if(isset($_GET['jumlah'])){
    $jumlah= "Order by jumlah $_GET[jumlah] ";
  
    
  }
 
 
  $query_utama = "select nama,c.cart_id,nama_produk,jumlah,kursi,subtotal
  from cart_produk cp, kursi k,produk p,`user` u,cart c
  where cp.produk_id=p.produk_id and cp.kursi_id=k.kursi_id and u.user_id=c.user_id and c.cart_id=cp.cart_id
  ".$jenis.$jumlah;
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
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"
        style="position: relative;margin-top:-750px;">
        <h1 class="page-header">Pembelian berdasarkan jumlah</h1>

        <form action="" method="get">
          <div class=" col-md-6 " style="position: relative;">
<h3>KATEGORI</h3>
            <div class="btn-group" role="group">

              <?php while ($tampung=mysqli_fetch_assoc($dropdown)): ?>
              <input type="radio" style="display:inline;" name="jenis" value="<?php echo $tampung['kategori_id'] ?>">
              <?php echo $tampung['nama_kategori'] ?><br>
              <?php endwhile ;?>

            </div>

          </div>
          <div class=" col-md-6 " style="position: relative;">
        <h3>JUMLAH TIKET</h3>
            <div class="btn-group" role="group">

              <select name="jumlah" id="">
                <option value="asc">jumlah terkecil</option>
                <option value="desc">jumlah terbesar</option>
              </select>

            </div>
              </DIV>
          
            <button style="width:100px;height:50px;margin-left:80%" type="submit">Cari</button>
        </form>


        <div class="table-responsive col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID Cart</th>
                <th>user</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>kursi</th>
                <th>subtotal</th>

              </tr>
            </thead>
            <tbody>
              <?php while($tampung=mysqli_fetch_assoc($total)): ?>
              <tr>
                <td><?php echo $tampung['cart_id']   ?></td>
                <td><?php echo $tampung['nama']   ?></td>
                <td><?php echo $tampung['nama_produk']   ?></td>
                <td><?php echo $tampung['jumlah']   ?></td>
                <td><?php echo $tampung['kursi']   ?></td>
                <td><?php echo $tampung['subtotal']   ?></td>
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