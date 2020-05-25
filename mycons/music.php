
<?php
session_start();

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

   if( isset($_GET["page"])){
       $halamanaktif=$_GET["page"];
   }else{
       $halamanaktif=1;
   }
$awaldata=($dataperhalaman*$halamanaktif)-$dataperhalaman;
// var_dump($jumlahhalaman);
if( isset($_GET["jenis"])){
    $query = mysqli_query($con,"select a.nama_produk,a.gambar,min(b.harga)
    from (select *from produk where kategori_id='k1') a,kursi b
    where a.produk_id=b.produk_id and genre='$_GET[jenis]'
    group by a.nama_produk,a.gambar
    limit $awaldata,$dataperhalaman
    ");
    $querytotalbyjenis = mysqli_query($con,"select a.nama_produk,a.gambar,min(b.harga)
    from (select *from produk where kategori_id='k1') a,kursi b
    where a.produk_id=b.produk_id and genre='$_GET[jenis]'
    group by a.nama_produk,a.gambar
   
    ");
    $totaldata= mysqli_num_rows($querytotalbyjenis);
    $jumlahhalaman= ceil($totaldata/$dataperhalaman);

}else{
    $query = mysqli_query($con," select a.nama_produk,a.gambar,min(b.harga)
    from (select *from produk where kategori_id='k1') a,kursi b
     where a.produk_id=b.produk_id
      group by a.nama_produk,a.gambar
    limit $awaldata,$dataperhalaman
    ");
}
// var_dump($query);

if(isset($_SESSION["nama"])){
 $home= "homepagelogin.php";}
  else{
$home="index.php";
  }


?>




<html>

<head>
    <!-- <link rel="stylesheet" href="asset/bootstrap/css/bootstrap-theme.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.default.css">
    <link rel="stylesheet" href="externalmusic.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">
    <title>music</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #fff;
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
        }

        nav ul li:hover a {
            color: white;
        } */

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
            background-color: #f8f8f8;
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
            /* padding: 10px; */
        }

        .belakang {
            float: left;
            margin: 10px 60px 10px 60px;
        }

        .belakang h2 {
            text-align: center
        }

        .belakang p {
            text-align: center
        }

        .button {
            position: relative;
        }

        .footer {
            background-color: gray;
            widows: 100px;
            height: 150px;
        }

        #gambar .product .image img {
            width: 373px;
            height: 249px;
        }

        .lisearch {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            font-weight:200;
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
            font-weight:200;
            /* -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); */
        }

        .lihover:hover{
            /* text-decoration: none; */
            background: #38a7bb;
        }

        .lihover:hover a{
            color:white;
        }

        .ahover:hover{
            text-decoration: none;
            /* background: #38a7bb; */
            color:#fff;
        }

        .logocart {
            z-index: 2;
            position: fixed;
            /* float:right; */
            margin-top:665px;
            margin-left: 1400px;
            z-index:20;
            /* width:10px;
            height:10px; */
        }
    </style>

    <nav  style='width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
        <ul>
        <li><img src="assets/images/manok.png" style='height:80px;width:192px;margin-top:17px;margin-left:10px;'
                    onclick="window.location.href='<?php echo $home?>'"></li>
            <li class="lihover"><a href="music.php" style="margin-top: 20px;text-decoration: none;" class="ahover">Music</a></li>
            <li class="lihover"><a href="drama.php" style="margin-top: 20px;text-decoration: none;" class="ahover">Theatrical</a></li>
            <li class="lihover"><a href="orchestra.php" style="margin-top: 20px;text-decoration: none;" class="ahover">Orchestra </a></li>
            <li class="lihover"><a href="expo.php" style="margin-top: 20px;text-decoration: none;" class="ahover">Expo</a>
            </li>
            <li style="margin-top:32px;margin-left: 20px;">
                <input type="search" class="lisearch" placeholder="search" required="" style="width: 450px;float: right;"id="searchbar">
            </li>
            <?php if (isset($_SESSION["nama"])){ ?>
   <li style="float: right;" class="lihover"><a href="login.php" style="margin-top: 20px;text-decoration: none;" class="ahover"><?php echo $_SESSION["nama"]?></a></li>

           <?php }else{ ?>
            <li style="float: right;" class="lihover"><a href="login.php" style="margin-top: 20px;text-decoration: none;" class="ahover">Log In</a></li>
            <li style="float: right;" class="lihover"><a href="signup.php" style="margin-top: 20px;text-decoration: none;" class="ahover">Register</a></li>
            <?php } ?>
        </ul>
    </nav>

    <div class='logocart' onclick="window.location.href='chart.php'">
        <!-- <div class='logocart'> -->
        <img src='assets/images/sc6.png'>
        <!-- </div> -->
    </div>

    <div id="body" class="col-md-12" style='top:150px;'>
        <div class="col-sm-2">
            <div class="panel panel-default sidebar-menu">

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
                                <li ><a href="music.php?jenis=rock">Rock</a>
                                </li>
                                <li><a href="music.php?jenis=edm">EDM</a>
                                </li>
                                <li ><a href="music.php?jenis=chill">Chill</a>
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





            <!-- *** MENUS AND FILTERS END *** -->

            <!-- /.banner -->
        </div>
        <div id="isi" class="col-md-10 col-sm-4">

            <div class="col-sm-12">

                <!-- <p class="text-muted lead">In our Ladies department we offer wide selection of the best products we have
                    found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.
                </p> -->

                <div class="row products" id="satu">
                        <div id="kotak">
<?php while ($tampung=mysqli_fetch_assoc($query)) { ?>
                    <div class="col-md-4 col-sm-6" id="gambar">
                        <div class="product">
                            <div class="image">
                                <a href="product.php?gambar=<?php echo $tampung["gambar"]?>">
                                    <img src="assets/images/<?php echo $tampung["gambar"]?>" alt="" class="img-responsive">
                                   
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="text">
                                <h3><a href="product.php"><?php echo $tampung["nama_produk"] ?></a></h3>
                                <p class="price">Rp<?php echo number_format($tampung["min(b.harga)"],0,',','.') ?></p>
                                <p class="buttons">
                                    <a href="product.php" class="btn btn-default">View detail</a>
                                    <a href="shop-basket.php" class="btn btn-template-main"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
               
<?php }; ?>
</div>
                    <!--  -->
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.products -->

                <div class="row">

                    <div class="col-md-12 banner">
                        <a href="#">
                            <img src="img/banner2.jpg" alt="" class="img-responsive">
                        </a>
                    </div>

                </div>


                <div class="pages">

                    <!-- <p class="loadMore">
                        <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
                    </p> -->
                    <ul class="pagination">
                    <li><a href="#">«</a>
                        </li>
                        <?php   if(isset($_GET["jenis"])){ 
                      
                      for($i=1; $i<=$jumlahhalaman;$i++) :  ?>
                      <?php if($i == $halamanaktif): ?>
                        <li class="active"><a style="background-color:red" href="?jenis=<?=$_GET["jenis"];?>&page=<?=$i; ?>"><?= $i; ?></a>
                        <?php else : ?>
                            <li class="active"><a href="?jenis=<?=$_GET["jenis"];?>&page=<?=$i; ?>"><?= $i; ?></a>

                        <?php endif ; ?>
                      <?php endfor; } 
                  else {
                     for($i=1; $i<=$jumlahhalaman;$i++) :  ?>
                     <?php if ($i == $halamanaktif): ?>
                        <li class="active"><a  style="background-color:red" href="?page=<?=$i; ?>"><?= $i; ?></a>
                     <?php else : ?>
                         <li class="active"><a href="?page=<?=$i; ?>"><?= $i; ?></a>
                     <?php endif; ?>
                     <?php  endfor; } ?>

                    </ul>

                </div>


            </div>
        </div>


       





    </div>
    <footer id="footer" class="col-md-12 col-sm-12" style="margin-top: 500px;">
        <div class="container">
            <div class="col-md-4 col-sm-12">
                <h4>About us</h4>

                <p>kita adalah penyedia jasa tiket konser</p>

                <hr>

                <h4>Join our monthly newsletter</h4>

                <form>
                    <div class="input-group">

                        <input type="text" class="form-control">

                        <span class="input-group-btn">

                            <button class="btn btn-default" type="button" style='margin-top:20px;margin-left:0.5px;height:42px'><i class="fa fa-send"></i>&gt;</button>

                        </span>

                    </div>
                    <!-- /input-group -->
                </form>

                <hr class="hidden-md hidden-lg hidden-sm">

            </div>
            <!-- /.col-md-3 -->

            <div class="col-md-4 col-sm-12">

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

            <div class="col-md-4 col-sm-12">

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



    
    <link rel="stylesheet" href="external.css">
    <script src="assets/script/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="script.js"></script>
</body>

</html>