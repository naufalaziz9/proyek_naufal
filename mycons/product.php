<?php  
require_once('db.php');
if(isset($_SESSION["nama"])){
    $home= "homepagelogin.php";}
     else{
   $home="index.php";
     }
    if(!isset($_GET['gambar'])){
        if(isset($_SESSION["nama"])){
            header("Location: homepagelogin.php");}
             else{
                header("Location: index.php");
             }
    }

$total=mysqli_query($con,"SELECT * FROM produk p where gambar='$_GET[gambar]';");
$tampung=mysqli_fetch_assoc($total);


$kursi=mysqli_query($con,"select kursi_id,concat(kursi,': Rp',harga) as kursi, produk_id
from kursi where produk_id='$tampung[produk_id]';");

$harga=mysqli_query($con,"select kursi_id,kursi,min(harga) from kursi where produk_id='$tampung[produk_id]' group by produk_id,kursi_id,kursi order by min(harga) limit 1;");
$tampungharga=mysqli_fetch_assoc($harga);

$kursiaz = $con->query("select k.produk_id, pp.gambar, kursi
FROM kursi k, (SELECT p.produk_id, gambar FROM produk p) pp
where k.produk_id=pp.produk_id and k.produk_id='$tampung[produk_id]'
order by gambar;");

$savequery = mysqli_query($con, "select gambar, nama_produk, min(k.harga), kursi, jumlah
from produk p, kursi k, cart_produk cp
where p.produk_id=k.produk_id and p.produk_id=cp.produk_id
group by p.produk_id
order by jumlah desc
limit 3;");
$bawah=mysqli_query($con,"select distinct gambar, nama_produk, k.harga, kursi, jumlah,stok
from produk p, kursi k, cart_produk cp
where p.produk_id=k.produk_id and p.produk_id=cp.produk_id
group by nama_produk
order by stok asc
limit 3;")

?>
<html>

<head>
    <title> My Con's</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="externalproduct.css">
    <link rel="stylesheet" href="style.default.css">
    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f8f8f8;
            font-family: Arial, Helvetica, sans-serif;
            color: black;

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

        nav ul li:hover>ul {
            display: block;
            width: 150px;
        }

        nav ul {
            background: white;
            padding: 0 20px;
            list-style: none;
            position: relative;
            display: inline-table;
            width: 100%;
        }

        nav ul:after {
            content: "";
            clear: both;
            display: block;
        }

        nav ul li {
            float: left;
        }

        /* nav ul li:hover {
            background: #38a7bb;
            height: 100px;
        } */

        /* nav ul li:hover a {
            color: white;
            text-decoration: none;
            height: 80px;
        } */

        nav ul li a {
            display: block;
            padding: 20px 25px;
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

        nav ul ul li {
            float: none;
            border-top: 1px soild #53bd84;
            border-bottom: 1px solid #53bd84;
            position: relative;
        }

        nav ul ul li a {
            padding: 15px 40px;
            color: black;
        }

        /* nav ul ul li a:hover {
            background-color: #666;
            text-decoration: none;
        } */

        nav ul ul ul {
            position: absolute;
            left: 100%;
            top: 0;
        }

        .logo {
            color: black;
            font-family: sans-serif;
            font-size: 40px;
            font-style: italic;
            padding: 10px;
        }

        .lisearch {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 200;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        .lisearch:focus {
            outline: 0;
            font-weight: 200;
            /* -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); */
        }

        .lihover:hover {
            /* text-decoration: none; */
            background: #38a7bb;
        }

        .lihover:hover a {
            color: white;
        }

        .ahover:hover {
            text-decoration: none;
            /* background: #38a7bb; */
            color: #fff;
        }
    </style>
    <nav
        style='width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
        <ul>
        <li><img src="assets/images/manok.png" style='height:80px;width:192px;margin-top:17px;margin-left:10px;'
                    onclick="window.location.href='<?php echo $home?>'"></li>
            <li class='lihover'><a href="music.php" style="margin-top: 25px;text-decoration: none;"
                    class="ahover">Music</a></li>
            <li class='lihover'><a href="drama.php" style="margin-top: 25px;text-decoration: none;"
                    class="ahover">Theatrical</a>
            </li>
            <li class='lihover'><a href="orchestra.php" style="margin-top: 25px;text-decoration: none;"
                    class="ahover">Orchestra </a>
            </li>
            <li class='lihover'><a href="expo.php" style="margin-top: 25px;text-decoration: none;"
                    class="ahover">Expo</a>
            </li>
            <li style="margin-top:32px;margin-left: 23px;">
                <input type="search" class="lisearch" placeholder="search" required=""
                    style="width: 450px;float: right;">
            </li>
            <?php if (isset($_SESSION["nama"])){ ?>
            <li style="float: right;" class="lihover"><a href="login.php"
                    style="margin-top: 25px;text-decoration: none;" class="ahover"><?php echo $_SESSION["nama"]?></a>
            </li>

            <?php }else{ ?>
            <li style="float: right;" class="lihover"><a href="login.php"
                    style="margin-top: 25px;text-decoration: none;" class="ahover">Log In</a></li>
            <li style="float: right;" class="lihover"><a href="signup.php"
                    style="margin-top: 25px;text-decoration: none;" class="ahover">Register</a></li>
            <?php } ?>
        </ul>
    </nav>
    <br><br><br><br><br><br>
    <div style='background:#f8f8f8;'>
        <div class="col-md-12" style="width: 90%;height:800px;transform: translate(100px);;">
            <div class="col-sm-2">
                <div class="panel panel-default sidebar-menu" style='background:#f8f8f8;'>

                    <div class="panel-heading">
                        <h3 class="panel-title">Categories</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked category-menu">
                            <li>
                                <a href="music.php">Music <span class="badge pull-right"></span></a>
                                <ul>
                                    <li><a href="music.php?jenis=pop">Pop</a>
                                    </li>
                                    <li><a href="music.php?jenis=rock">Rock</a>
                                    </li>
                                    <li><a href="music.php?jenis=edm">EDM</a>
                                    </li>
                                    <li><a href="music.php?jenis=chill">Chill</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="orchestra.php">Orchestra <span class="badge pull-right"></span></a>
                                <ul>
                                    <li><a href="orchestra.php?jenis=symohony">Symphony</a>
                                    </li>
                                    <li><a href="orchestra.php?jenis=acapella">Acapella</a>
                                    </li>
                                    <li><a href="orchestra.php?jenis=speech">Speech</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="drama.php">Theatrical <span class="badge pull-right"></span></a>
                                <ul>
                                    <li><a href="drama.php?jenis=comedy">Comedy</a>
                                    </li>
                                    <li><a href="drama.php?jenis=tragedy">Tragedy</a>
                                    </li>
                                    <li><a href="drama.php?jenis=tragicomedy">Tragicomedy</a>
                                    </li>
                                    <li><a href="drama.php?jenis=melodrama">Melodrama</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="expo.php">Expo<span class="badge pull-right"></span></a>
                                <ul>
                                    <li><a href="expo.php?jenis=art">Art</a>
                                    </li>
                                    <li><a href="expo.php?jenis=talkshow">Talkshow</a>
                                    </li>
                                    <li><a href="expo.php?jenis=seminar">Seminar</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

            <div id="background" class="col-md-10" style="margin: 0% auto;background:#f8f8f8;">
                <div class="col-md-12">
                    <div id="gambar" style="float: left;"><img src="assets/images/<?php echo $_GET["gambar"] ?>"
                            alt="sss" style="width:600px;height:300px;float: left;"></div>
                    <div id="harga" style="float: left;margin-left: 450px;">
                        <h1>Mulai dari</h1>
                        <p>Rp<?php echo number_format($tampungharga["min(harga)"], 0, ',','.') ?> </p>
                        <!-- <form action="uang.php" method="post">
                    <input type="text" name="sere" style="width:40px;height:32px">
                    </form> -->

                        <div class="btn-group"> <button type="button" class="btn btn-primary dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Beli <span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <p style="margin-left:20px">Kategori</p>
                                <?php while ($kursi2=mysqli_fetch_assoc($kursi)) : ?>

                                <li><a href="aksicart.php?kursi=<?= $kursi2["kursi_id"] ?>"
                                        name="kursi"><?php echo $kursi2["kursi"]?></a></li>


                                <?php endwhile ?>

                            </ul>
                        </div>


                    </div>
                </div>
                <div class="row portfolio-project" style="float: left;background:#f8f8f8;">
                    <div class="col-md-6">
                        <div class="heading">
                            <h3><?php echo $tampung["nama_produk"] ?></h3>
                        </div>

                        <p><?php echo $tampung["deskripsi"]  ?></p>



                    </div>
                    <div class="col-md-3 project-more" style="margin-left: 150px;">

                        <h4>Harga</h4>
                        <p>Rp<?php echo number_format($tampungharga["min(harga)"],0,',','.') ?></p>
                        <h4>Tempat</h4>
                        <p><?php echo $tampung["kota"]  ?></p>
                        <h4>Waktu</h4>
                        <p><?php echo $tampung["jam"]  ?></p>
                        <h4>Hari dan Tanggal</h4>
                        <p><?php echo $tampung["tanggal"]  ?></p>
                    </div>
                </div>



            </div>
        </div>
        <div style="width: 80%;margin: 0 auto;">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="box text-uppercase">
                        <h3>Produk terlaris</h3>
                    </div>
                </div>

                <?php while($assocquerynya = mysqli_fetch_assoc($savequery)): ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="#">
                                <img src="assets/images/<?php echo $assocquerynya['gambar']?>" alt=""
                                    class="img-responsive image1">
                            </a>
                        </div>
                        <div class="text">
                            <h3><?php echo $assocquerynya['nama_produk']?></h3>
                            <p class="price">Rp<?php echo $assocquerynya['min(k.harga)']?></p>
                        </div>
                    </div>
                    <!-- /.product -->
                </div>
                <?php endwhile; ?>

            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="box text-uppercase">
                        <h3>Kursi Terbatas</h3>
                    </div>
                </div>

                <?php while($assocquerynya2 = mysqli_fetch_assoc($bawah)): ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="#">
                                <img src="assetS/images/<?php echo $assocquerynya2['gambar']?>" alt=""
                                    class="img-responsive image1">
                            </a>
                        </div>
                        <div class="text">
                            <h3><?php echo $assocquerynya2['nama_produk']?></h3>
                            <p class="price">Rp<?php echo $assocquerynya2['harga']?></p>
                        </div>
                    </div>
                    <!-- /.product -->
                </div>
                <?php endwhile; ?>



            </div>
        </div>
        <footer id="footer">
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

                                <button class="btn btn-default" type="button" style='margin-top:0px;height:34px'><i
                                        class="fa fa-send"></i></button>

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
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always" style="height: 38px;">
                                <h5><a href="music.php">MUSIC</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always" style="height: 38px;">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always" style="height: 38px;">
                                <h5><a href="orchestra.php">ORCHESTRA</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always" style="height: 38px;">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always" style="height: 38px;">
                                <h5><a href="drama.php">THEATRICAL</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always" style="height: 38px;">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always" style="height: 38px;">
                                <h5><a href="expo.php">EXPO</a></h5>
                            </div>
                        </div>

                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-4 col-sm-8">

                    <h4>Contact</h4>

                    <p><strong>mycons Ltd.</strong>
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

            </div>
            <!-- /.container -->
        </footer>

        <script src="assets/script/jquery-3.4.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
    </div>
</body>

</html>