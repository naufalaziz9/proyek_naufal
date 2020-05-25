<html>
<?php session_start();
include('db.php');
$totaltampil=mysqli_query($con,"select * from produk where kategori_id='k1' limit 4");
$polpular=mysqli_query($con,"select sum(jumlah) as 'aa',cp.produk_id,nama_produk,gambar from cart_produk cp ,produk p where cp.produk_id=p.produk_id group by produk_id order by 'aa' desc limit 8;");
if(!isset($_SESSION["nama"])){
    header("Location: index.php");
}

?>

<head>
    <title> My Con's</title>
    <!-- <link rel="stylesheet" href="asset/bootstrap/css/bootstrap-theme.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.default.css">
    <link rel="stylesheet" href="bootstrap.css">
    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <link href="animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    >

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="owl.carousel.css" rel="stylesheet">
    <link href="owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800"
        rel="stylesheet" type="text/css">
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }


        img {
            width: auto;
            height: auto;
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
            margin-bottom: 0px;
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
            background: #666;
        }

        nav ul li:hover a {
            color: #fff;
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

        nav ul ul li a:hover {
            /* background-color: #666; */
            /* text-decoration: none; */
        }

        nav ul ul ul {
            position: absolute;
            left: 100%;
            top: 0;
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

        .latar {
            background-size: cover;
            margin: 0 auto;
            height: 250px;
            width: 80%;
            margin: 20px auto;
            overflow: auto
        }

        .button {
            position: relative;
        }

        .footer {
            background-color: gray;
            widows: 100px;
            height: 150px;
        }

        .latar2 {
            background-size: cover;
            margin: 0 auto;
            height: 400px;
            width: 80%;
            margin: 20px auto;
            overflow: auto
        }

        .box-image .image img {
            width: 357px;
            height: 200px;
            border-radius: 25px;
        }

        /* .box-image {
            border-radius: 15px 50px;
        } */

        .logocart {
            z-index: 2;
            position: fixed;
            /* float:right; */
            margin-top: 595px;
            margin-left: 1400px;
            z-index: 20;
            /* width:10px;
            height:10px; */
        }

        .lihover:hover {
            /* text-decoration: none; */
            background: #38a7bb;
            color: #fff;
        }

        .ahover:hover {
            text-decoration: none;
            /* background: #38a7bb; */
            color: #fff;
        }

        .dropdown-toggle,
        .dropdown-toggle:hover,
        .dropdown-toggle:focus {
            text-decoration: none;
            color: black
        }

        /* .dropdown:visited{
            text-decoration:none;
            color:black
        } */

        .popdancoming {
            font-family: "Roboto", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size:50px;
            letter-spacing: 7px;
        }
    </style>

    <div
        style='background-color:white;color:black;display:block;position:fixed;top:0px;z-index:1;width:100%;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
        <nav>
            <ul>
                <li><img src="assets/images/manok.png" style='height:80px;width:192px;'></li>
                <li class='lihover'><a href="music.php" style='text-decoration:none;' class='ahover'>Music</a></li>
                <li class='lihover'><a href="drama.php" style='text-decoration:none;' class='ahover'>Theatrical</a>
                </li>
                <li class='lihover'><a href="orchestra.php" style='text-decoration:none;' class='ahover'>Orchestra </a>
                </li>
                <li class='lihover'><a href="expo.php" style='text-decoration:none;' class='ahover'>Expo</a>
                </li>
                <li class="dropdown" onclick="tes()" style="float: right;">
                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false"><img src="assets/images/user3.jpg"
                            style="float: right;width: 50px;height: 50px;" onclick="setting()">
                            <?php echo $_SESSION["nama"] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu" style="display: none;">
                        <li><a href="setting.php">Setting</a>
                        </li>
                        <li><a href="account.php">Account</a>
                        </li>
                        <li><a href="history.php">History</a>
                        </li>
                        <li><a href="logout.php">Log out</a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
    </div>

    <div class='logocart' onclick="window.location.href='chart.php'">
        <!-- <div class='logocart'> -->
        <img src='assets/images/sc6.png'>
        <!-- </div> -->
    </div>

    <section>
        <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

        <div class="home-carousel" style='margin-top:30px;'>

            <div class="dark-mask"></div>

            <div class="container">
                <div class="homepage owl-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5 right">
                                <p>
                                    <img src="img/logo.png" alt="">
                                </p>
                                <h1>Nonton konser apapun sepuasnya</h1>
                                <p>Musik . Orkestra . Teaterikal . Expo</p>
                            </div>
                            <div class="col-sm-7">
                                <a href='product.php'>
                                    <img class="img-responsive" src="assets/images/9.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">

                            <div class="col-sm-7 text-center">
                                <a href='product.php'>
                                    <img class="img-responsive" src="assets/images/11.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-sm-5">
                                <h1>Mudah dalam memesan</h1>
                                <ul class="list-style-none">
                                    <li>Nggak perlu login</li>
                                    <li>Nggak perlu banyak step</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-7">
                                <a href='product.php'>
                                    <img class="img-responsive" src="assets/images/20.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-5">
                                <h1>Promo!!!</h1>
                                <ul class="list-style-none">
                                    <li>Ajak minimal 9 teman,</li>
                                    <li>Promo 30%</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <input type="search" id="searchbar" class="form-control" placeholder="search" required="" autofocus="">

    <div class="col-md-12">
        <h1 class='popdancoming' style="color: black;float: left;">Music</h1>
    </div>
    <div class="row portfolio" id="qq">
        <?php while($tampung=mysqli_fetch_assoc($totaltampil)): ?>
        <div class="col-sm-6 col-md-3">
            <div class="box-image">
                <div class="image">
                    <img src="assets/images/<?php echo $tampung["gambar"]?>" alt="" class="img-responsive">
                </div>
                <div class="bg"></div>
                <div class="name">
                    <h3><a href="product.php?gambar=<?=$tampung["gambar"]?>"><?php echo $tampung["nama_produk"]?></a></h3>
                </div>
                <div class="text">
                    <p class="hidden-sm hidden-lg hidden-md">Pellentesque habitant morbi tristique senectus et netus et
                        malesuada</p>
                    <p class="buttons">
                        <a href="product.php?gambar=<?=$tampung["gambar"]?>"
                            class="btn btn-template-transparent-primary">View</a>
                    </p>
                </div>
            </div>
            <!-- /.box-image -->

        </div>

        <?php endwhile; ?>


    </div>
    <div class="col-md-12">
        <h1 class='popdancoming' style="color: black;float: left;">HITS THIS WEEKEND</h1>
    </div>
    <div class="row portfolio">
        <?php while($tampung2=mysqli_fetch_assoc($polpular)): ?>
        <div class="col-sm-6 col-md-3">
            <div class="box-image">
                <div class="image">
                    <img src="assets/images/<?php echo $tampung2["gambar"]?>" alt="" class="img-responsive">
                </div>
                <div class="bg"></div>
                <div class="name">
                    <h3><a href="product.php?gambar=<?=$tampung2["gambar"]?>"><?php echo $tampung2["nama_produk"]?></a></h3>
                </div>
                <div class="text">
                    <p class="hidden-sm hidden-lg hidden-md">Pellentesque habitant morbi tristique senectus et netus et
                        malesuada</p>
                    <p class="buttons">
                        <a href="product.php?gambar=<?=$tampung2["gambar"]?>"
                            class="btn btn-template-transparent-primary">View</a>
                    </p>
                </div>
            </div>
            <!-- /.box-image -->

        </div>


        <?php endwhile; ?>




    </div>

    <section class="bar background-pentagon no-mb">
        <div class="container">
            <div class="row showcase">
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <i class="fa fa-music"></i>

                        <h4><span class="counter">580</span><br>

                            Musician</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <i class="fa fa-users"></i>

                        <h4><span class="counter">100</span><br>

                            Orchestra</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <i class="fa fa-apple"></i>

                        <h4><span class="counter">320</span><br>

                            Theatrical</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <i class="fa fa-camera"></i>

                        <h4><span class="counter">923</span><br>

                            Expo</h4>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="bar background-pentagon no-mb"
        style="background-image: url('assets/images/texture-bw.png');background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Testimonials</h2>
                    </div>

                    <p class="lead">Kita telah menyediakan web pesan tiket secara online, ditujukan untuk orang dari
                        berbagai kalangan. Berikut
                        komentar mereka.</p>


                    <!-- *** TESTIMONIALS CAROUSEL ***
     _________________________________________________________ -->

                    <ul class="owl-carousel testimonials same-height-row">
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="text">
                                    <p>Saat saya mengakses web ini, saya merasa bangga karena ada usaha lokal
                                        yang berbasis teknologi dalam bidang hiburan. Jarang ada developer web yang
                                        membuat
                                        inovasi seperti ini, apalagi web ini didesain oleh anak muda yang berbakat.</p>
                                </div>
                                <div class="bottom">
                                    <div class="icon"><i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="name-picture">
                                        <img class="" alt="" src="assets/images/azizceo.jpg">
                                        <h5>Imaduddin</h5>
                                        <p>CEO The Mads Residence</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="text">
                                    <p>Orang tidak akan mengingat suatu tanggal, orang akan mengingat sebuah momen.
                                        Momen
                                        yang akan terngiang di benak kita. Banyak momen yang dikembangkan oleh web ini.
                                        Saya sebagai penggemar konser, sangat berterima kasih pada CEO web ini.</p>
                                </div>
                                <div class="bottom">
                                    <div class="icon"><i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="name-picture">
                                        <img class="" alt="" src="assets/images/person-1.jpg">
                                        <h5>Bevan Christian</h5>
                                        <p>CEO Bevan Mall</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="text">
                                    <p>Hidup ini singkat, dunia ini luas. Kita harus melakukan sesuatu dan menjelajahi
                                        apapun
                                        yang belum kita ketahui. Web ini sangat kreatif dan inovatif. Dia bekerja sama
                                        dengan
                                        berbagai pihak untuk mengadakan acara. Ini sangat membantu pihak-pihak seperti
                                        itu.</p>
                                </div>
                                <div class="bottom">
                                    <div class="icon"><i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="name-picture">
                                        <img class="" alt="" src="assets/images/person-2.jpg">
                                        <h5>Adimas Surya</h5>
                                        <p>CEO WarBob</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="text">
                                    <p>Tidak ada kalimat yang bisa saya ucapkan lagi setelah memesan tiket di web ini.
                                        Web ini membuat saya merasa semangat dalam memesan tiket, sehingga saya mengajak
                                        teman-teman saya untuk memesan tiket di web ini. Terima kasih mycons :) .</p>
                                </div>

                                <div class="bottom">
                                    <div class="icon"><i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="name-picture">
                                        <img class="" alt="" src="assets/images/person-4.jpg">
                                        <h5>Naufal Aziz</h5>
                                        <p>CEO Naufalpedia</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="text">
                                    <p>Ini menunjukkan sebuah estetika dalam sebuah web. Mungkin banyak orang yang
                                        menganggap web ini jelek atau tidak berguna, namun
                                        bagi saya, ini sudah cukup memuaskan.</p>
                                </div>

                                <div class="bottom">
                                    <div class="icon"><i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="name-picture">
                                        <img class="" alt="" src="assets/images/person-1.jpg">
                                        <h5>Tony Stark</h5>
                                        <p>CEO Stark Industrie</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- /.owl-carousel -->

                    <!-- *** TESTIMONIALS CAROUSEL END *** -->
                </div>

            </div>
        </div>
    </section>

    <footer id="footer" class="col-md-12">
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

                            <button class="btn btn-default" type="button"
                                style='margin-top:20px;margin-left:0.5px;height:42px'><i
                                    class="fa fa-send"></i>&gt;</button>

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
                            <h5><a href="#">MUSIC</a></h5>
                        </div>
                    </div>

                    <div class="item same-height-row clearfix">
                        <div class="image same-height-always" style="height: 38px;">

                        </div>
                        <div class="name same-height-always" style="height: 38px;">
                            <h5><a href="#">ORCHESTRA</a></h5>
                        </div>
                    </div>

                    <div class="item same-height-row clearfix">
                        <div class="image same-height-always" style="height: 38px;">

                        </div>
                        <div class="name same-height-always" style="height: 38px;">
                            <h5><a href="#">THEATRICAL</a></h5>
                        </div>
                    </div>

                    <div class="item same-height-row clearfix">
                        <div class="image same-height-always" style="height: 38px;">

                        </div>
                        <div class="name same-height-always" style="height: 38px;">
                            <h5><a href="#">EXPO</a></h5>
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

        </div>
        <!-- /.container -->
    </footer>



    <link rel="stylesheet" href="external.css">
    <!-- <script src="assets/script/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="assets/bootstrap/js/bootstrap.js"></script> -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="assets/script/jquery.cookie.js"></script>
    <script src="assets/script/waypoints.min.js"></script>
    <script src="assets/script/jquery.counterup.min.js"></script>
    <script src="assets/script/jquery.parallax-1.1.3.js"></script>
    <script src="assets/script/front.js"></script>
    <script src="assets/script/owl.carousel.min.js"></script>
    <script src="searchbar.js"></script>
</body>

</html>