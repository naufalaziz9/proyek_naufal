<?php
include("../configonline.php");
$dropdown=mysqli_query($con,"Select nama_kategori
From produk p, kursi k,kategori g
where p.produk_id = k.produk_id and p.kategori_id=g.kategori_id
group by nama_kategori;");
$total=mysqli_query($con,"select p.produk_id, nama_produk, kursi, harga,nama_kategori
From produk p, kursi k,kategori g
where p.produk_id = k.produk_id and p.kategori_id=g.kategori_id 
Order by harga asc;
");

if(isset($_GET['jenis'])){

  $total=mysqli_query($con,"select p.produk_id, nama_produk, kursi, harga,nama_kategori
  From produk p, kursi k,kategori g
  where p.produk_id = k.produk_id and p.kategori_id=g.kategori_id and nama_kategori='$_GET[jenis]'
  Order by harga asc;
  ");
}

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
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">MyCons Est. 2019</a>
            </div>
                  
          </div>
        </nav>
        <div id='a' >
    
    </div>
    
        <div class="container-fluid">
          <div class="row">
          <?php include("sidebar.php")?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"style="position: relative;margin-top:-750px">
              <h1 class="page-header">Produk Termurah</h1>

              <div class="col-sm-0 col-md-0 sidebar" style="position: relative;left: 950px;bottom:20px">

<div class="btn-group" role="group" >
        <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          Kategori
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1" >
        <?php while ($tampung=mysqli_fetch_assoc($dropdown)): ?>
        <li><a href="?jenis=<?php echo $tampung['nama_kategori'] ?>"><?php echo $tampung['nama_kategori'] ?></a></li>
      <?php endwhile ;?>
        </ul>
      </div>

</div>
    
             
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID Produk</th>
                      <th>Nama Produk</th>
                      <th>Kursi</th>
                      <th>Harga</th>
                      <th>kategori</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($total)): ?>
                    <tr>
                      <td><?php echo $tampung['produk_id']   ?></td>
                      <td><?php echo $tampung['nama_produk']   ?></td>
                      <td><?php echo $tampung['kursi']   ?></td>
                      <td><?php echo $tampung['harga']   ?></td>
                      <td><?php echo $tampung['nama_kategori']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
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