<?php
session_start();
include("configonline.php");
if(!isset($_SESSION["confirmation"])){
    header("Location: confirmation.php");
}
if(isset($_SESSION["nama"])){
    $home= "homepagelogin.php";}
     else{
   $home="index.php";
     }
if(isset($_SESSION['nama'])){
    $koneksi="homepagelogin.php";
$kirim=$_SESSION['nama'];
}else{
    $koneksi="index.php";
    $email=mysqli_query($con,"SELECT user_temp_id FROM cart c where cart_id='$_SESSION[cart_id]';");
    $assoc=mysqli_fetch_assoc($email);
    $kirim=$assoc['user_temp_id'];
}
if(isset($_SESSION['cancel'])){
    $update=mysqli_query($con,"update pembayaran set status_id='s4' where cart_id='$_SESSION[cart_id]';");
    session_regenerate_id();
}else{
    $update=mysqli_query($con,"update pembayaran set status_id='s1' where cart_id='$_SESSION[cart_id]';");
    $query=mysqli_query($con,"SELECT * FROM cart_produk c where cart_id='$_SESSION[cart_id]';");
    while($stok=mysqli_fetch_assoc($query)){
        $ganti=mysqli_query($con,"update produk set stok=stok-'$stok[jumlah]' where produk_id='$stok[produk_id]';");
   };
    session_regenerate_id();

}

unset($_SESSION['cancel']);

include "classes/class.phpmailer.php";
$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "smtp.gmail.com"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "bevankevin0@gmail.com"; //user email
$mail->Password = "bkbfpiekvhljkevv"; //password email 
$mail->SetFrom("bevankevin0@gmail.com","MYcons"); //set email pengirim
$mail->Subject = "HOHOHO your ticket is coming"; //subyek email
$mail->AddAddress("$kirim","$kirim");  //tujuan email
$mail->MsgHTML("<link href='//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <style type='text/css'>
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*='margin: 16px 0;'] {
            margin: 0 !important;
        }
    </style>
</head>

<body style='background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;'>
<!-- HIDDEN PREHEADER TEXT -->
<div style='display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;'> We're thrilled to bring this ticket here! Get ready to dive into your new experience. </div>
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
    <!-- LOGO -->
    <tr>
        <td bgcolor='#3CBEB2' align='center'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                <tr>
                    <td align='center' valign='top' style='padding: 40px 10px 40px 10px;'> </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor='#3CBEB2' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                <tr>
                    <td bgcolor='#ffffff' align='center' valign='top' style='padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;'>
                        <h1 style='font-size: 48px; font-weight: 400; margin: 2;'>Thank you!</h1> <img src=' https://img.icons8.com/dusk/64/000000/train-ticket.png' width='125' height='120' style='display: block; border: 0px;' />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                <tr>
                    <td bgcolor='#ffffff' align='left' style='padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <p style='margin: 0;'>We're happy as we could satisfy you with our service. we will try our best to make our services better for customers like you. <br><br>
                            Attached is your ticket. To open this report, make sure you have a program or application to open PDFs on your device.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#ffffff' align='left'>
                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                            <tr>
                                <td bgcolor='#ffffff' align='center' style='padding: 20px 30px 60px 30px;'>
                                    <table border='0' cellspacing='0' cellpadding='0'>
                                        <tr>
                                            <td align='center' style='border-radius: 3px;' bgcolor='#3CBEB2'><a href='mycons.xyz/index.php' target='_blank' style='font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #3cbeb2; display: inline-block;'>See your ticket</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> <!-- COPY -->
                <tr>
                    <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <p style='margin: 0;'>If you have any questions, just reply to this email—we're always happy to help out.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <p style='margin: 0;'>Thanks for choosing our service,<br>BEVAN ADIMAS AZIZ Team</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor='#f4f4f4' align='center' style='padding: 30px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                <tr>
                    <td bgcolor='#FFECD1' align='center' style='padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <h2 style='font-size: 20px; font-weight: 400; color: #111111; margin: 0;'>Need more help?</h2>
                        <p style='margin: 0;'><a href='#' target='_blank' style='color: #3cbeb2;'>We’re here to help you out</a></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                <tr>
                    <td bgcolor='#f4f4f4' align='left' style='padding: 0px 30px 30px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;'> <br>
                        <p style='margin: 0;'>If these emails get annoying, please feel free to <a href='#' target='_blank' style='color: #111111; font-weight: 700;'>unsubscribe</a>.</p>
                    </td>
                </tr>
            </table>
            
        </td>
    </tr>
</table>
</body>

</html>");
if($mail->Send()) ;
else;

?>


<html>

<head>
    <title>Accepted!</title>
    <link href="https://getbootstrap.com/docs/4.3/getting-started/introduction/" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
</head>
<style>
    #acc {

        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 40px;

    }

    #check {
        margin-top: 5%;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;

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
        color: #fff;
    }

    .ahover:hover {
        text-decoration: none;
        /* background: #38a7bb; */
        color: #fff;
    }
</style>
</head>

<body>
    <nav
        style='width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;z-index: 10000;'>
        <ul>
        <li><img src="assets/images/manok.png" style='height:80px;width:192px;margin-top:17px;margin-left:10px;'
                    onclick="window.location.href='<?php echo $home?>'"></li>
            <li class='lihover'><a href="music.php" style="margin-top: 20px;text-decoration: none;"
                    class="ahover">Music</a></li>
            <li class='lihover'><a href="drama.php" style="margin-top: 20px;text-decoration: none;"
                    class="ahover">Theatrical</a>
            </li>
            <li class='lihover'><a href="orchestra.php" style="margin-top: 20px;text-decoration: none;"
                    class="ahover">Orchestra </a>
            </li>
            <li class='lihover'><a href="expo.php" style="margin-top: 20px;text-decoration: none;"
                    class="ahover">Expo</a>
            </li>
            <li style="margin-top:32px;margin-left: 20px;">
                <input type="search" class="lisearch" placeholder="search" required=""
                    style="width: 400px;float: right;">
            </li>
            <?php if (isset($_SESSION["nama"])){ ?>
   <li style="float: right;" class="lihover"><a href="login.php" style="margin-top: 20px;text-decoration: none;" class="ahover"><?php echo $_SESSION["nama"]?></a></li>

           <?php }else{ ?>
            <li style="float: right;" class="lihover"><a href="login.php" style="margin-top: 20px;text-decoration: none;" class="ahover">Log In</a></li>
            <li style="float: right;" class="lihover"><a href="signup.php" style="margin-top: 20px;text-decoration: none;" class="ahover">Register</a></li>
            <?php } ?>
        </ul>
    </nav>


    <div class="jumbotron text-center" style="padding-top: 200px;z-index: 0;height: 700px;">
        <h1 class="display-3" style="margin-top: 100px;">Terima kasih</h1>
        <p class="lead" style='color:black'><strong style='color:black'>Mohon periksa email anda </strong >Informasi lebih jauh untuk melengkapi akun anda.</p>
        <hr>
        <p style='color:black'>
            Mengalami masalah? <a href="contact.php">Kontak kami</a>
        </p>
        <p class="lead"style='color:black'>
            <a class="btn btn-primary btn-sm" href=<?php echo $koneksi ?> role="button">Lanjut ke beranda</a>
        </p>
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

                <!-- <hr class="hidden-md hidden-lg hidden-sm"> -->

            </div>
        </div>
        <!-- /.container -->
    </footer>




    <script src="https://static.codepen.io/assets/packs/js/vendor-d2ebf8dc803f013bf6c6.chunk.js"></script>
    <script src="https://static.codepen.io/assets/packs/js/3-72598176c14ab972e9d7.chunk.js"></script>
    <script src="https://static.codepen.io/assets/packs/js/everypage-fd8f5c6a243fa0dddc9b.js"></script>
    <script
        src="https://static.codepen.io/assets/editor/full/full_page_renderer-6820de594cbbdb85d46560f1b1b39ac7b4d89853b5bb821d579bf5e015689f81.js">
    </script>

    <script
        src="https://static.codepen.io/assets/common/everypage-1ce90830741abfe2114d50ca1a244f9c2467b80c51ec9ee8ff712d3d20ea5798.js">
    </script>
</body>

</html>