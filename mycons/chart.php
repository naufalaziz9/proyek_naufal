<?php require_once('db.php');

if(isset($_SESSION["nama"])) {
    $home="homepagelogin.php";
}

else {
    $home="index.php";
}

$data=mysqli_query($con, "SELECT * FROM cart_produk c,produk p,kursi k,artis a,artis_produk ap
where cart_id='$_SESSION[cart_id]'and c.produk_id=p.produk_id and c.kursi_id=k.kursi_id and ap.produk_id=p.produk_id and ap.artis_id=a.artis_id;
    ");
$harga=mysqli_query($con, "SELECT * FROM cart c where cart_id='$_SESSION[cart_id]';");
    $dataharga=mysqli_fetch_assoc($harga);
    $tax=$dataharga['harga_total']*0.1;
    $total=$dataharga["harga_total"]+$tax;

    ?> <html>

<head>
    <title> My Cons</title>
    <script src="assets/script/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="externalaziz.css">
    <link rel="stylesheet" href="style.default.css">
    <link rel="stylesheet" href="custom.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Barlow' rel='stylesheet'>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .col-md-12 {
            margin-top: 50px;
        }

        .col-md-2 {
            margin-top: 50px;
        }


        body {
            background-color: #fff;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
        }

        .box {
            font-size: 20px;
        }

        .table {
            font-size: 18px;
        }

        #total {
            top: 40px;
        }

        img {
            height: 198px;
            width: 350px;
            position: relative;
            left: -16px;
        }

        .dasbor-fixeds a {
            font-size: 40px;
            font-style: italic;
        }

        #konten {
            margin-top: 100px;
        }

        .col-md-4,
        .col-md-6 {
            border-color: #38a7bb;
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

        a {
            color: white;
        }

        #kotak {
            background-color: whitesmoke;
        }

        #kotak p {
            font-family: 'barlow';
            font-size: 22px;
        }

        .col-md-1 {
            margin-top: 50px;
            margin-left: -90px
        }

        .fonhompeg {
            font-family: "Roboto", Helvetica, Arial, sans-serif;
            line-height: 1.5;
            font-weight: 570;
            text-transform: uppercase;
            letter-spacing: 0.1em;

        }

        .col-md-12:hover {}
    </style>
    <!-- BIKIN NAVBAR -->
    <nav
        style='width:100%;margin:0px;position:fixed;z-index:1;font-family: "Roboto",Helvetica,Arial,sans-serif;line-height: 1.5;font-weight: 570;text-transform: uppercase;letter-spacing: 0.1em;'>
        <ul>
            <!-- <li><a href="" style="font-size: 40px;font-style:italic;text-decoration: none;">MY
                    CONS</a></li> -->
            <li><img src="assets/images/manok.png" style='height:80px;width:192px;margin-top:17px;margin-left:10px;'
                    onclick="window.location.href='<?php echo $home?>'"></li>
            <li style='position:relative;left:450px;'><a style="margin-top: 20px;text-decoration: none;"
                    class="yes-hover">Cart</a></li>
        </ul>
    </nav>
    <div class="col-md-12" id="konten">
        <div class="col-sm-9"> <?php while($tampung=mysqli_fetch_assoc($data)): ?> <div class="col-md-12">
                <div class='col-md-4' style="height:300px;"> <img src="assets/images/<?php echo $tampung['gambar']?>"
                        style="height:250px;" alt=""> </div>
                <div class='col-md-5' id="kotak"
                    style="border-style: solid;border-width: 2px;witdh:580px;height:250px;text-align: center;">
                    <h3 style="margin-top: 20px"> <a href="confirmation.php" class='fonhompeg'
                            style="text-decoration: none;color: black;text-align: center;"><?php echo $tampung['nama_produk']?></a>
                    </h3>
                    <p style="margin-top:0px"><?php echo $tampung['nama_artis']?></p>
                    <p><?php echo $tampung['kota']?> <?php echo $tampung['tanggal']?></p>
                    <p>Rp <?php echo $tampung['harga']?></p>
                </div>
                <div class="col-md-2">
                    <td> <input style="width:50px;height:25px;" type="number" class="numeric"
                            value="<?php echo$tampung['jumlah'];?>" min='0'
                            data-id_kursi="<?php echo$tampung['kursi_id'];?>"> </td>
                </div>
                <div class='col-md-1'> <button type="button" class="delete"
                        data-id_kursi="<?php echo$tampung['kursi_id'];?>">Delete</button> </div>
            </div> <?php endwhile; ?> </div>
        <div class="col-md-3" id="total" style="position: relative;">
            <div class="box" id="order-summary">
                <div class="box-header">
                    <h3>Order summary</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Order subtotal</td>
                                <th>Rp<?php echo number_format($dataharga['harga_total'], 0, ',', '.')?></th>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <th>Rp<?php echo number_format($tax, 0, ',', '.')?></th>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <th>Rp<?php echo number_format($total, 0, ',', '.')?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- <button type="button" class="btn btn-success" style="float: right;margin-top: -20px;">
                    next</button> -->
            </div>
        </div>
    </div>
    <div id='total' class="col-md-12">
        <div class="col-md-9">
            <div class="footerNavWrap clearfix">
                <div class="btn btn-success pull-left btn-fyi" onclick="window.location.href='product.php'"><span
                        class="glyphicon glyphicon-chevron-left"></span> <a style='text-decoration:none;'>Back</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="footerNavWrap clearfix">
                <div class="btn btn-success pull-right btn-fyi" onclick="window.location.href='choose_payment.php'">
                    <a style='text-decoration:none;'>Next</a><span class="glyphicon glyphicon-chevron-right"></span>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="col-md-12">
        <div class="container">
            <div class="col-md-4 col-sm-8">
                <h4>About us</h4>
                <p style="text-align:left;">kita adalah penyedia jasa tiket konser</p>
                <hr>
                <h4>Join our monthly newsletter</h4>
                <form>
                    <div class="input-group"> <input type="text" class="form-control"> <span class="input-group-btn">
                            <button class="btn btn-default" type="button"
                                style='margin-top:20px;margin-left:0.5px;height:34px'><i class="fa fa-send"></i>&gt;
                            </button> </span> </div>
                    < !-- /input-group -->
                </form>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            < !-- /.col-md-3 -->
                <div class="col-md-4 ">
                    <h4 style='margin-left:59px;'>CATEGORIES</h4>
                    <div class="blog-entries">
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always" style="height: 38px;"> </div>
                            <div class="name same-height-always" style="height: 38px;">
                                <h5><a href="music.php">MUSIC</a></h5>
                            </div>
                        </div>
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always" style="height: 38px;"> </div>
                            <div class="name same-height-always" style="height: 38px;">
                                <h5><a href="orchestra.php">ORCHESTRA</a></h5>
                            </div>
                        </div>
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always" style="height: 38px;"> </div>
                            <div class="name same-height-always" style="height: 38px;">
                                <h5><a href="drama.php">THEATRICAL</a></h5>
                            </div>
                        </div>
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always" style="height: 38px;"> </div>
                            <div class="name same-height-always" style="height: 38px;">
                                <h5><a href="expo.php">EXPO</a></h5>
                            </div>
                        </div>
                    </div>
                    <hr class="hidden-md hidden-lg">
                </div>
                < !-- /.col-md-3 -->
                    <div class="col-md-4 col-sm-8">
                        <h4>Contact</h4>
                        <p style='text-align:left;'><strong>mycons Ltd.</strong> <br>Indonesia, Surabaya
                            <br>Surabaya <br>Citraland, Universitas Ciputra <br>Bukit Golf Utama E6/12 <br>
                            <strong>Indonesia</strong> </p> <a href="contact.php"
                            class="btn btn-small btn-template-main">Go to contact page</a>
                        <hr class="hidden-md hidden-lg hidden-sm">
                    </div>
        </div>
        < !-- /.container -->
    </footer>
    <script>
        $(document).ready(function () {

                $(".numeric").on("change", function () {



                        // alert($(this).val());
                        var idkursi = $(this).data('id_kursi');
                        var qtybarang = $(this).val();

                        $.ajax({

                                url: 'response_cart.php',
                                method: 'POST',
                                data: {
                                    id_kursi: idkursi,
                                    qty: qtybarang
                                }

                                ,
                                datatype: "html",
                                success: function (result) {
                                    $('#total').html(result);
                                }
                            }

                        );

                    }

                );

                $(".delete").on("click", function () {

                        location.reload(true);

                        // alert($(this).val());
                        var idkursi = $(this).data('id_kursi');
                        // var qtybarang = $(this).val();

                        $.ajax({

                                url: 'responsedelete.php',
                                method: 'POST',
                                data: {
                                    id_kursi: idkursi,
                                    // qty: qtybarang
                                }

                                ,
                                datatype: "html",
                                success: function (result) {
                                    $('#konten').html(result);
                                }
                            }

                        );

                    }

                );




            }

        );
    </script>
    < !-- <script src="uang.js">
        </script> --> <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>