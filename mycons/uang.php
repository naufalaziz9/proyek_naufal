<?php
session_start();
include("configonline.php");
$jumlah=$_GET["jumlah"];
$data=mysqli_query($con,"SELECT * FROM cart_produk c,produk p,kursi k,artis a,artis_produk ap
where cart_id='$_SESSION[cart_id]' and c.produk_id=p.produk_id and c.kursi_id=k.kursi_id and ap.produk_id=p.produk_id and ap.artis_id=a.artis_id;
");
$harga=mysqli_query($con,"SELECT * FROM cart c where cart_id='$_SESSION[cart_id]';");
$tampung2=mysqli_fetch_assoc($data);

// $penambahan=$penambahan+();
$dataharga=mysqli_fetch_assoc($harga);
$harga=$harga+($jumlah*$tampung2['harga']);
$tax= $harga*0.1;
$total=$dataharga["harga_total"]-$tax;

?>
 <div class="col-sm-9">
        <?php while($tampung=mysqli_fetch_assoc($data)): ?>

            <div class="col-md-12">
                <div class='col-md-4' style="border-style: solid;border-width: 2px;height:200px;">

                        <img src="assets/images/<?php echo $tampung['gambar']?>" alt="">

                </div>
                <div class='col-md-6' id="kotak" style="border-style: solid;border-width: 2px;height:200px;">
                        <h2 style="margin-top: 20px">
                            <a href="confirmation.php"
                                style="text-decoration: none;color: black;text-align: center;"><?php echo $tampung['nama_produk']?></a>
                        </h2>
                        <p style="margin-top:0px"><?php echo $tampung['nama_artis']?></p>
                        <p><?php echo $tampung['kota']?> <?php echo $tampung['tanggal']?></p>
                        <p><?php echo $tampung['harga']?></p>
    
                    </div>
                <div class="col-md-2">
                    <td>
                        <input type="number" id="numeric" value="<?php echo$tampung['jumlah'];?>" min='0' class="form-control">
                        
                    </td>
                </div>

            </div>
        <?php endwhile; ?>
        </div>
        <div class="col-md-3" id="total" style="position: relative;">
            <div class="box" id="order-summary">
                <div class="box-header">
                    <h3>Ringkasan pesanan</h3>
                </div>
                

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Subtotal pesanan</td>
                                <th><?php echo $dataharga['harga_total']?></th>
                            </tr>
                            <tr>
                                <td>Pajak</td>
                                <th><?php echo $tax?></th>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <th><?php echo $total?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- <button type="button" class="btn btn-success" style="float: right;margin-top: -20px;">next</button> -->
            </div>
        </div>


    </div>


    <div id='total' class="col-md-12">
        <div class="col-md-9">
        <div class="footerNavWrap clearfix">
        <div class="btn btn-success pull-left btn-fyi"><span class="glyphicon glyphicon-chevron-left"></span> <a href="product.php">Back</a></div>
    </div>
    </div>
        <div class="col-md-3">
        <div class="footerNavWrap clearfix">
                
                <div class="btn btn-success pull-right btn-fyi"><a href="choose_payment.php">Next</a><span class="glyphicon glyphicon-chevron-right"></span></div>
            </div>
        </div>