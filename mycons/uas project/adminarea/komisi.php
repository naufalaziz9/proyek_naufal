<?php
include("../configonline.php");
$dropdown3=mysqli_query($con,"select distinct year(tanggal) as 'tahun' from pembayaran ;");

$total=mysqli_query($con,"SELECT komisi_id,jumlah,nama_pembayaran,tanggal FROM komisi k left join pembayaran p left join jenis_pembayaran j
on j.jenis_pembayaran_id=p.jenis_pembayaran_id on p.pembayaran_id=k.pembayaran_id
where status_id='s1';");
$kursi = $jumlah = $kategori = $status= "";
if($_GET){
  if(isset($_GET['tahun'])){
    $tahun="and year(tanggal)$_GET[tahun]";
    
  }
   if(isset($_GET['month'])){
    $bulan=" and month(tanggal)$_GET[month]";
    
  }
  
  $query_utama = "SELECT komisi_id,jumlah,nama_pembayaran,tanggal FROM komisi k left join pembayaran p left join jenis_pembayaran j
  on j.jenis_pembayaran_id=p.jenis_pembayaran_id on p.pembayaran_id=k.pembayaran_id
  where status_id='s1'".$tahun.$bulan;
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
            <div class=" col-md-12" style="position: relative;margin-top:-750px;left:180px;width=600px">
                <h1 class="page-header">Komisi</h1>
                <form action="" method="GET" class="col-md-12">


                    <div class="col-md-6" style="position: relative;">


                        <h4>bulan</h4>
                        <!-- Split button -->
                        <div class="btn-group">
                            <select name="month" id="">
                            <option value=">0">none</option>
                                <option value="=01">januari</option>
                                <option value="=02">februari</option>
                                <option value="=03">maret</option>
                                <option value="=04">april</option>
                                <option value="=05">mei</option>
                                <option value="=06">juni</option>
                                <option value="=07">juli</option>
                                <option value="=08">agustus</option>
                                <option value="=09">september</option>
                                <option value="=10">oktober</option>
                                <option value="=11">november</option>
                                <option value="=12">desember</option>
                            </select>
                           
                        </div>
                    </div>
                    <div class="col-md-6" style="position: relative;">


                        <h4>tahun</h4>
                        <!-- Split button -->
                        <div class="btn-group">
                     
                      
                        <?php while($tampung=mysqli_fetch_assoc($dropdown3)): ?>
                                <input name="tahun" type="radio" value= "='<?php echo $tampung['tahun']?>'"><?php echo $tampung['tahun']?></input>
                                <?php endwhile ;?>
                           
                        </div>


                    </div>

                    <button style="position: relative;left:450px;top:0px" >cari</button>
                </form>
                <br>

                <div class="table-responsive col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>komisi_id</th>
                                <th>jumlah</th>
                                <th>nama pembayaran</th>
                                <th>tanggal</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php while($tampung=mysqli_fetch_assoc($total)): ?>
                            <tr>
                                <td><?php echo $tampung['komisi_id']   ?></td>
                                <td><?php echo $tampung['jumlah']   ?></td>
                                <td><?php echo $tampung['nama_pembayaran']   ?></td>
                                <td><?php echo $tampung['tanggal']   ?></td>

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