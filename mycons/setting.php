<?php
session_start();
if(!isset($_SESSION['nama'])){
    header("Location: index.php");
}
  if(isset($_SESSION["nama"])){
    $home= "homepagelogin.php";}
     else{
   $home="index.php";
     }
?>


<!doctype html>
<html>

<head>
    <title>MyCONS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.default.css">
    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">
    <meta charset="UTF-8">
</head>

<body>
    <style>
        body {
            background-color: #f8f8f8;
        }

        #kotaksetting {
            position: relative;
            top: -100px;
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

    <!-- BIKIN NAVBAR -->
    <nav
        style='width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
        <ul>
        <li><img src="assets/images/manok.png" style='height:80px;width:192px;margin-top:17px;margin-left:10px;'
                    onclick="window.location.href='<?php echo $home?>'"></li>
            <li style='position:relative;left:450px;'><a style="margin-top: 20px;text-decoration: none;"
                    class="yes-hover">Setting</a></li>
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


    <div id="kotaksetting" class="col-md-12" style="z-index: 0;margin-top:240px;">
        <div class="dalam" style="display:block;text-align: justify;">
            <a href="#">Bahasa</a>
            <select class="form-control input-lg">
                <option value="">English</option>
                <option value="">Indonesia</option>
                <option value="">Saudi Arabia</option>
            </select>
            <br><br>
            <a href="#">Lokasi</a>
            <select class="form-control input-lg">
                <option value="">Bandung</option>
                <option value="">Jakarta</option>
                <option value="">Makassar</option>
                <option value="">Surabaya</option>
            </select>
            <br><br>
        </div>
        <button type="button" class="btn btn-danger" style="float: right;">Cancel</button>
        <button type="button" class="btn btn-primary" style="float: right;">save</button>
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
                            <h5><a href="music.php">MUSIC</a></h5>
                        </div>
                    </div>

                    <div class="item same-height-row clearfix">
                        <div class="image same-height-always" style="height: 38px;">
                        </div>
                        <div class="name same-height-always" style="height: 38px;">
                            <h5><a href="orchestra.php">ORCHESTRA</a></h5>
                        </div>
                    </div>

                    <div class="item same-height-row clearfix">
                        <div class="image same-height-always" style="height: 38px;">
                        </div>
                        <div class="name same-height-always" style="height: 38px;">
                            <h5><a href="drama.php">THEATRICAL</a></h5>
                        </div>
                    </div>

                    <div class="item same-height-row clearfix">
                        <div class="image same-height-always" style="height: 38px;">
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

    <!-- <div id='menu-setting'>
        <a href="setting.php" class="active">Setting</a>
        <a href="">Account</a>
        <a href="history.php">History</a>
    </div> -->

    <link rel="stylesheet" href="css_setting.css">
    <script src="assets/script/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>


    <!-- <script>
        function setting() {
            document.getElementById("menu-setting");
        }
    </script> -->
</body>

</html>