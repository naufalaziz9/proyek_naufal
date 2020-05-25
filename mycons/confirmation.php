<?php
session_start();
$_SESSION["confirmation"]=1;

if(isset($_SESSION["nama"])){
    $home= "homepagelogin.php";}
     else{
   $home="index.php";
     }

include("configonline.php");
$beli=mysqli_query($con,"select p.gambar,nama_produk,a.nama_artis,kota,p.tanggal,harga,kursi,jumlah,nama_pembayaran
from produk p, artis a,artis_produk ap,kursi k,cart_produk cp,pembayaran pb,jenis_pembayaran jp
where p.produk_id=ap.produk_id and ap.artis_id=a.artis_id and p.produk_id=k.produk_id and cp.cart_id=pb.cart_id and pb.jenis_pembayaran_id=jp.jenis_pembayaran_id and k.kursi_id=cp.kursi_id and cp.produk_id=p.produk_id and cp.cart_id='$_SESSION[cart_id]';");
$beli2=mysqli_query($con,"select p.gambar,nama_produk,a.nama_artis,kota,p.tanggal,harga,kursi,jumlah,nama_pembayaran
from produk p, artis a,artis_produk ap,kursi k,cart_produk cp,pembayaran pb,jenis_pembayaran jp
where p.produk_id=ap.produk_id and ap.artis_id=a.artis_id and p.produk_id=k.produk_id and cp.cart_id=pb.cart_id and pb.jenis_pembayaran_id=jp.jenis_pembayaran_id and k.kursi_id=cp.kursi_id and cp.produk_id=p.produk_id and cp.cart_id='$_SESSION[cart_id]';");
$subtotal=mysqli_query($con,"select sum(subtotal) as 'aa' from cart_produk where cart_id='$_SESSION[cart_id]';");
$khusus=mysqli_fetch_assoc($beli2);
$dataharga=mysqli_fetch_assoc($subtotal);
$tax= $dataharga['aa']*0.1;
$total=$dataharga["aa"]+$tax;
?>


<html>

<head>
    <title> My Cons</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="externalconfirmation.css">
    <link rel="stylesheet" href="style.default.css">
    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Barlow' rel='stylesheet'>
</head>

<body>
    <style>
        .bawahnya {
            background-color: white;
            width: 100%;
            height: 60px;
            margin: 0%;
            padding: 0%;


        }

        img {
            height: 198px;
            width: 350px;
            position: relative;
            left: -16px;
        }

        .col-md-4,
        .col-md-8 {
            border-color: #38a7bb;
        }

        .col-md-12 {
            margin-top: 20px;
        }

        nav {
            margin: auto;
            text-align: center;

            width: 85%;
            margin: 10px auto;
        }

        nav ul ul {
            display: none;
        }

        nav ul {
            background: white;
            padding: 0 20px;
            list-style: none;
            position: relative;
            display: inline-table;
            width: 100%;
        }

        /* nav ul:after {
            content: "";
            clear: both;
            display: block;
        } */

        nav ul li {
            float: left;
        }

        nav ul li a {
            display: block;
            padding: 25px;
            color: black;
            text-decoration: none;
        }

        nav ul ul {
            background: #53bd84;
            border-radius: 0px;
            padding: 0;
            position: absolute;
            top: 100%;
        }

        /* nav ul ul li {
            float: none;
            border-top: 1px soild #53bd84;
            border-bottom: 1px solid #53bd84;
            position: relative;
        } */

        nav ul ul li a {
            padding: 15px 40px;
            color: black;
        }
        #kotak{
 background-color: whitesmoke;
}
#kotak p{font-family: 'barlow';font-size: 22px;}
#cancel{margin-right:250px;position:relative;bottom:13px}
    </style>

    <div class="semua">
        <!-- BIKIN NAVBAR -->
        <nav
            style='width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
            <ul>
            <!-- <li><img src="assets/images/manok.png" style='height:80px;width:192px;'
                    onclick="window.location.href='index.php'"></li> -->
                    <li><img src="assets/images/manok.png" style='height:80px;width:192px;margin-top:17px;margin-left:10px;'
                    onclick="window.location.href='<?php echo $home?>'"></li>
                <li style='position:relative;left:450px;'><a style="margin-top: 20px;text-decoration: none;"
                        class="yes-hover">Cart</a></li>
            </ul>
        </nav>

        <div class="col-md-12" style="z-index: 0;position: relative;top: 50px;">
            <div class="col-md-9">
            <?php while($tampung=mysqli_fetch_assoc($beli)): ?>
                <div class="col-md-12" style="margin-top: 100px;">
                    <div class='col-md-4' style="border-style: solid;border-width: 2px;height:200px;">
                        <p style="color:black" class='gambar-one'>
                            <img src="assets/images/<?php echo $tampung['gambar'] ?>" alt="">

                        </p>
                    </div>
                    <div class='col-md-8' id="kotak" style="border-style: solid;border-width: 2px;height:200px;">
                        <h2 style="margin-top: 20px;text-align:center">
                            <a href="confirmation.php" style="text-decoration: none;color: black;"><?php echo $tampung['nama_produk'] ?></a>
                        </h2>
                        <ul style="margin-left: -20px;">
                            <p style="margin-top:30px"><?php echo $tampung['nama_artis'] ?></p>
                            <p><?php echo $tampung['kota']." ".$tampung['tanggal'] ?></p>
                            <p><?php echo $tampung['kursi']." ".$tampung['harga']."x (".$tampung['jumlah'].")" ?></p>

                        </ul>

                    </div>

                </div>
            <?php endwhile; ?>
               
            </div>
            <div class="col-md-3" style="position: relative; top:100px;">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Ringkasan pesanan</h3>
                    </div>


                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Subtotal pesanan</td>
                                    <th>Rp<?php echo number_format($dataharga['aa'],0,',','.')?></th>
                                </tr>
                                <tr>
                                    <td>Pajak</td>
                                    <th>Rp<?php echo number_format($tax,0,',','.')?></th>
                                </tr>
                                <tr>
                                    <td>Metode Pembayaran</td>
                                    <th><?php echo $khusus['nama_pembayaran']?></th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>Rp<?php echo number_format($total,0,',','.')?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <form action="Email.php" method="post">
                    <button class="btn btn-success" style="float: right;margin-top: -20px;"
                        >Buy</button></form>
<form action="cancel.php" method="post">
                        <button id="cancel" class="btn btn-danger" style="float: right;margin-top: -20px;"
                        >Cancel</button></form>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="col-md-12" style="margin-top: 100px;">
        <div class="container">
            <div class="col-md-4 col-sm-8">
                <h4>About us</h4>

                <p>kita adalah penyedia jasa tiket konser</p>

                <hr>

                <h4>Join our monthly newsletter</h4>

                <form>
                    <div class="input-group">

                        <input type="text" class="form-control">

                        <span class="input-group-btn">

                            <button class="btn btn-default" type="button"><i class="fa fa-send"></i>&gt;</button>

                        </span>

                    </div>
                    <!-- /input-group -->
                </form>

                <hr class="hidden-md hidden-lg hidden-sm">

            </div>
            <!-- /.col-md-3 -->

            <div class="col-md-4 col-sm-8">

                <h4 style='margin-left:59px;'>CATEGORIES</h4>

                <div class="blog-entries">
                    <div class="item same-height-row clearfix">
                        <div class="image same-height-always" style="height: 38px;">

                        </div>
                        <div class="name same-height-always" style="height: 38px;">
                            <h5><a href='music.php'>Music</a></h5>
                        </div>
                    </div>

                    <div class="item same-height-row clearfix">
                        <div class="image same-height-always" style="height: 38px;">

                        </div>
                        <div class="name same-height-always" style="height: 38px;">
                            <h5><a href='orchestra.php'>Orchestra</a></h5>
                        </div>
                    </div>

                    <div class="item same-height-row clearfix">
                        <div class="image same-height-always" style="height: 38px;">

                        </div>
                        <div class="name same-height-always" style="height: 38px;">
                            <h5><a href='drama.php'>Theatrical</a></h5>
                        </div>
                    </div>

                    <div class="item same-height-row clearfix">
                        <div class="image same-height-always" style="height: 38px;">

                        </div>
                        <div class="name same-height-always" style="height: 38px;">
                            <h5><a href='expo.php'>Expo</a></h5>
                        </div>
                    </div>
                </div>

                <hr class="hidden-md hidden-lg">

            </div>
            <!-- /.col-md-3 -->

            <div class="col-md-4 col-sm-8">

                <h4>Contact</h4>

                <p style='text-align:left'>
                    <strong>mycons Ltd.</strong>
                    <br>Indonesia, Surabaya
                    <br>Surabaya
                    <br>Citraland, Universitas Ciputra
                    <br>Bukit Golf Utama E6/12
                    <br>
                    <strong>Indonesia</strong>
                </p>

                <a href="contact.php" class="btn btn-small btn-template-main">Go to contact page</a>

                <hr class="hidden-md hidden-lg hidden-sm">

            </div>
            <!-- /.col-md-3 -->



            <!-- <div class="col-md-3 col-sm-6">

                <h4>Photostream</h4>

                <div class="photostream">
                    <div style="height: 84px;">
                        <a href="#">
                            <img src="img/detailsquare.jpg" class="img-responsive" alt="#">
                        </a>
                    </div>
                    <div style="height: 84px;">
                        <a href="#">
                            <img src="img/detailsquare2.jpg" class="img-responsive" alt="#">
                        </a>
                    </div>
                    <div style="height: 84px;">
                        <a href="#">
                            <img src="img/detailsquare3.jpg" class="img-responsive" alt="#">
                        </a>
                    </div>
                    <div style="height: 84px;">
                        <a href="#">
                            <img src="img/detailsquare3.jpg" class="img-responsive" alt="#">
                        </a>
                    </div>
                    <div style="height: 84px;">
                        <a href="#">
                            <img src="img/detailsquare2.jpg" class="img-responsive" alt="#">
                        </a>
                    </div>
                    <div style="height: 84px;">
                        <a href="#">
                            <img src="img/detailsquare.jpg" class="img-responsive" alt="#">
                        </a>
                    </div>
                </div>

            </div> -->
            <!-- /.col-md-3 -->
        </div>
        <!-- /.container -->
    </footer>

    <!-- 
    <link rel="stylesheet" href="external.css"> -->
    <script src="assets/script/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>