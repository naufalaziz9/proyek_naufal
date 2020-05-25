<?php
session_start();
include("configonline.php");
?>

<html>

<head>
    <title>contact</title>

    <!-- <link rel="stylesheet" href="asset/bootstrap/css/bootstrap-theme.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.default.css">
    <link rel="stylesheet" href="externalmusic.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
</head>

<body>
    <style>
        .row .col-md-4 .box-simple .icon {
            padding-top: 30px;
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

        nav ul li:hover {
            background: #38a7bb;
        }

        nav ul li:hover a {
            color: white;
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
            background-color: #f8f8f8;
        }

        nav ul ul ul {
            position: absolute;
            left: 100%;
            top: 0;
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
    </style>


    <div class="col-md-12" style="height: 100px;">
        <div id="header">
            <nav
                style='width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
                <ul>
                <li><img src="assets/images/manok.png" style='height:80px;width:192px;margin-top:17px;margin-left:10px;'
                    onclick="window.location.href='index.php'"></li>
                    <li><a href="music.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Music</a>
                    </li>
                    <li><a href="drama.php" style="margin-top: 20px;text-decoration: none;"
                            class="yes-hover">Theatrical</a></li>
                    <li><a href="orchestra.php" style="margin-top: 20px;text-decoration: none;"
                            class="yes-hover">Orchestra </a></li>
                    <li><a href="expo.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Expo</a>
                    </li>
                    <li style="margin-top:32px;margin-left: 20px;">
                        <input type="search" class="lisearch" placeholder="search" required=""
                            style="width: 450px;float: right;">
                    </li>
                    <?php if (isset($_SESSION["nama"])){ ?>
                    <li style="float: right;" class="lihover"><a href="login.php"
                            style="margin-top: 20px;text-decoration: none;"
                            class="ahover"><?php echo $_SESSION["nama"]?></a></li>

                    <?php }else{ ?>
                    <li style="float: right;" class="lihover"><a href="login.php"
                            style="margin-top: 20px;text-decoration: none;" class="ahover">Log In</a></li>
                    <li style="float: right;" class="lihover"><a href="signup.php"
                            style="margin-top: 20px;text-decoration: none;" class="ahover">Register</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>

    </div>
    <div class="col-md-12">
        <div id="content">
            <div class="container" id="contact">

                <section>

                    <div class="row">
                        <div class="col-md-12">
                            <section>
                                <div class="heading">
                                    <h2>Kita di sini untuk membantu</h2>
                                </div>

                                <p class="lead">Apakah anda bingung? Atau tidak paham cara membeli tiket? Atau ingin
                                    lebih tahu detail dari web ini?</p>
                                <p>Jangan ragu untuk menghubungi kami, pusat layanan pelanggan kami bekerja untuk Anda
                                    24/7.</p>
                            </section>
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <h3>Alamat</h3>
                                <p>Citraland CBD Boulevard, Made, Kec. Sambikerep, Kota SBY, Jawa Timur 60219</p>
                            </div>
                            <!-- /.box-simple -->
                        </div>


                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h3>Pusat panggilan</h3>
                                <p class="text-muted">Nomor ini bebas pulsa jika menelepon dari Indonesia, kami
                                    menyarankan Anda untuk menggunakan bentuk komunikasi elektronik.</p>
                                <p><strong>+62 811 223 4567</strong>
                                </p>
                            </div>
                            <!-- /.box-simple -->

                        </div>

                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h3>Dukungan elektronik</h3>
                                <p class="text-muted">Silakan menulis email kepada kami atau menggunakan sistem tiket
                                    elektronik kami.</p>
                                <ul class="list-style-none">
                                    <li><strong><a href="mailto:">mycons@mycons.com</a></strong>
                                    </li>
                                    <li><strong><a href="#">Ticketio</a></strong> - platform dukungan tiket kami</li>
                                </ul>
                            </div>
                            <!-- /.box-simple -->
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row text-center">

                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Form kontak</h2>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <form method="post" action="contactrecive.php">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama depan</label>
                                            <input type="text" class="form-control" id="firstname" name='namedepan'>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Nama belakang</label>
                                            <input type="text" class="form-control" id="lastname" name='namebelakang'>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name='nameemail'>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subyek</label>
                                            <input type="text" class="form-control" id="subject" name='namesubyek'>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Pesan</label>
                                            <textarea id="message" class="form-control" name='namepesan'></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main"><i
                                                class="fa fa-envelope-o"></i> Kirim pesan</button>

                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>



                        </div>
                    </div>
                    <!-- /.row -->

                </section>


            </div>
            <!-- /#contact.container -->
        </div>
    </div>
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




    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>



    <!-- gmaps -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script src="js/gmaps.js"></script>
    <script src="js/gmaps.init.js"></script>
    <script src="assets/script/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</body>

</html>