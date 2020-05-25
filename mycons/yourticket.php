<html>

<head>
    <title>Your Ticket!</title>
    <!-- <link rel="stylesheet" href="asset/bootstrap/css/bootstrap-theme.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="bootstrap.css">
    <!-- Css animations  -->
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
    <style>
        #head {

            margin-left: 30px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 40px;
            float: left;

        }

        .nav {
            margin-left: 40px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            float: left;
            margin-top: 50px;
        }

        #bor {
            text-align: center;
            margin-left: 6q0px;
        }



        #Bar {

            border-style: solid;
            border-width: 5px;
            margin: 0 auto;
            margin-right: 40px;

            float: left;


        }

        #ket {
            text-align: center;
            margin: 0 auto;
            margin-left: 10px;
            margin-right: 40px;
            border-style: solid;
            border-width: 5px;
            float: left;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            width: 50%;


        }

        a {
            color: black;
        }

        ;

        #bawahan button{
            float: right;
           
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
</head>

<body>
<nav style='width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
        <ul>
        <li><img src="assets/images/manok.png" style='height:80px;width:192px;'
                    onclick="window.location.href='index.php'"></li>
            <li><a href="music.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Music</a></li>
            <li><a href="drama.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Theatrical</a></li>
            <li><a href="orchestra.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Orchestra </a></li>
            <li><a href="expo.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Expo</a>
            </li>
            <li style="float: right;" class="yes-hover"><a href="login.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Log In</a></li>
            <li style="float: right;" class="yes-hover"><a href="signup.php" style="margin-top: 20px;text-decoration: none;" class="yes-hover">Register</a></li>
        </ul>
    </nav>

<div class="col-md-12" style="margin-top:230px;margin-left: 50px;">
    <div class=col-md-12>
        <div class="col-md-2"></div>
        <div id="bor" class="col-md-8">
            <div id="Bar"><img src="csharp-rendered-qrcode.png" width="230" height="230"></div>
            <div id="ket">
                <p>Arie Baso
                    <br>Jakarta 19 Agustus 2020
                    <br> Lokasi : Gandaria Expo
                    <br> Jam : 13:00
                    <br> 50.000
                </p>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="col-md-12" id="bawahan">

     <a href="index.php">   <button type="button" class="btn btn-default" style="float: right;margin-right: 100px;margin-top: 80px;">Home</button></a>
    </div>
</div>
</body>

</html>