<?php 
session_start();
if(!isset($_SESSION['nama'])){
    header("Location: index.php");
}

include("configonline.php");

$savequerynya = mysqli_query($con,"select c.cart_id, nama_produk, kursi, harga, jumlah, harga_total
from cart c, produk p, cart_produk cp, kursi k, `user` u
where c.cart_id=cp.cart_id and p.produk_id=cp.produk_id and cp.kursi_id=k.kursi_id
and k.produk_id=p.produk_id and c.user_id=u.user_id and u.email='$_SESSION[nama]';");
// $assocquerynya=mysqli_fetch_assoc($savequery);
if(isset($_SESSION["nama"])){
    $home= "homepagelogin.php";}
     else{
   $home="index.php";
     }
?>

<html>

<head>
    <title> My Con's</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="externalhistory.css">
    <link rel="stylesheet" href="style.default.css">
    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <style>
        body {
            background: #f8f8f8;
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
    </style>

    <nav
        style='width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
        <ul>
        <li><img src="assets/images/manok.png" style='height:80px;width:192px;margin-top:17px;margin-left:10px;'
                    onclick="window.location.href='<?php echo $home?>'"></li>
            <li style='position:relative;left:450px;'><a style="margin-top: 20px;text-decoration: none;"
                    class="yes-hover">History</a></li>
            <div class="dropdown"
                style="position: relative;float: right;border: none;z-index: 100;right:50px;top:10px;">
                <div class="btn btn-default dropdown-toggle" type="button"
                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="assets/images/user3.jpg" style="float: right;width: 50px;height: 50px;"
                        onclick="setting()">
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width: 100px;position:absolute;">
                    <li><a href="setting.php">Setting</a></li>
                    <li><a href="account.php">Account</a></li>
                    <li><a href="history.php">History</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </div>
        </ul>
    </nav>

    <div class="col-md-12" style="z-index: 0;margin-top: 140px;">
        <div class="container">


            <div class="row">

                <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                <div class="col-md-9" id="customer-orders">

                    <p class="text-muted lead">Jika Anda memiliki pertanyaan, jangan ragu untuk <a
                            href="contact.php">menghubungi kami, </a>pusat layanan pelanggan kami berfungsi untuk Anda
                        24/7.</p>

                    <div class="box">

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID cart</th>
                                        <th>Acara</th>
                                        <th>Jenis kursi</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Subarga</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($assocquerynya = mysqli_fetch_assoc($savequerynya)): ?>
                                    <tr>
                                        <th><?php echo $assocquerynya['cart_id']?></th>
                                        <td><?php echo $assocquerynya['nama_produk']?></td>
                                        <td><?php echo $assocquerynya['kursi']?></td>
                                        <td><?php echo $assocquerynya['harga']?></td>
                                        <td><?php echo $assocquerynya['jumlah']?></td>
                                        <td><?php echo $assocquerynya['harga_total']?></td>

                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->

                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col-md-9 -->

                <!-- *** LEFT COLUMN END *** -->

                <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="history.php"><i class="fa fa-list"></i> My orders</a>
                                </li>
                                <li>
                                    <a href="setting.php"><i class="fa fa-heart"></i> Setting</a>
                                </li>
                                <li>
                                    <a href="account.php"><i class="fa fa-user"></i> Account</a>
                                </li>
                                <li>
                                    <a href="index.php"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <!-- *** RIGHT COLUMN END *** -->

            </div>


        </div>
        <!-- /.container -->
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

                        <input type="text" id="sear" class="form-control">

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
                    <br>universitas ciputra
                    <br>surabaya
                    <br>citraland
                    <br>indonesia
                    <br>
                    <strong>indonesia</strong>
                </p>

                <a href="contact.php" class="btn btn-small btn-template-main">Go to contact page</a>

                <hr class="hidden-md hidden-lg hidden-sm">

            </div>
        </div>
        <!-- /.container -->
    </footer>


    <script src="assets/script/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
  

</body>

</html>