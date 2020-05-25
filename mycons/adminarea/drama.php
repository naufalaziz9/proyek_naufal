<?php
include("../configonline.php");
$dropdown=mysqli_query($con,"SELECT genre FROM produk p where kategori_id='k2' group by genre ;");
$dropdown2=mysqli_query($con,"SELECT kota FROM produk p group by kota;");
$total=mysqli_query($con,"select produk_id, nama_produk, tanggal, stok, kota, jam, genre
from produk
where kategori_id='k2';");

if(isset($_GET["jdrama"])){

  $total=mysqli_query($con,"select produk_id, nama_produk, tanggal, stok, kota, jam, genre
from produk
where kategori_id='k2' and genre='$_GET[jdrama]';");
  
}
elseif(isset($_GET["kota"])){

  $total=mysqli_query($con,"select produk_id, nama_produk, tanggal, stok, kota, jam, genre
from produk
where kategori_id='k2' and kota='$_GET[kota]';");
  
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
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="menuawal.php">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
              </ul>
              <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
              </form>
            </div>
          </div>
        </nav>
        <div id='a' >
    
    </div>
        <div class="container-fluid">
          <div class="row">
          <?php include("sidebar.php")?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"style="margin-top:-700px">
              <h1 class="page-header">Produk Kategori Drama</h1>


              <div class="col-sm-0 col-md-0 sidebar" style="position: relative;left: 850px;bottom:-15px">
              
              <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          kota
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1">
        <?php while ($tampung=mysqli_fetch_assoc($dropdown2)): ?>
          <li><a href="musik.php?kota=<?php echo $tampung['kota'] ?>"><?php echo $tampung['kota'] ?></a></li>
        <?php endwhile ;?>
        </ul>
      </div>

</div>

                <div class="col-sm-0 col-md-0 sidebar" style="position: relative;left: 950px;bottom:20px">

                <div class="btn-group" role="group" >
                        <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          Kategori
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1" >
                        <?php while ($tampung=mysqli_fetch_assoc($dropdown)): ?>
                        <li><a href="drama.php?jdrama=<?php echo $tampung['genre'] ?>"><?php echo $tampung['genre'] ?></a></li>
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