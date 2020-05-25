<?php
if($_POST){
session_start();
$penerima=$_POST;
$idbarang=$penerima['id_kursi'];
include("configonline.php");
$updatejumlah=mysqli_query($con,"update cart_produk set jumlah='0',subtotal='0' where cart_id='$_SESSION[cart_id]'and kursi_id='$idbarang';");
// $harga2=mysqli_query($con,"update cart c inner join kursi k inner join cart_produk cp
//     set cp.subtotal=k.harga*cp.jumlah
//     where c.cart_id=cp.cart_id and cp.kursi_id=k.kursi_id and cp.kursi_id='$idbarang' and cp.cart_id='$_SESSION[cart_id]';");
$subtotal=mysqli_query($con,"select sum(subtotal) as aa from cart_produk cp where cp.cart_id='$_SESSION[cart_id]' ;");
$assocsubtotal=mysqli_fetch_assoc($subtotal);
$subtotal33=mysqli_query($con,"update cart c inner join cart_produk cp set harga_total='$assocsubtotal[aa]' where c.cart_id=cp.cart_id and cp.cart_id='$_SESSION[cart_id]' ;");
 $deletebarang=mysqli_query($con,"delete from cart_produk where cart_id='$_SESSION[cart_id]'and kursi_id='$idbarang';");
 
    $harga=mysqli_query($con,"SELECT * FROM cart c where cart_id='$_SESSION[cart_id]';");
    $dataharga=mysqli_fetch_assoc($harga);
    $tax= $dataharga['harga_total']*0.1;
    $total=$dataharga["harga_total"]+$tax;
    $updatetotal=mysqli_query($con,"update cart set harga_total='$total' where cart_id='$_SESSION[cart_id]';");
    $data=mysqli_query($con,"SELECT * FROM cart_produk c,produk p,kursi k,artis a,artis_produk ap
where cart_id='$_SESSION[cart_id]' and c.produk_id=p.produk_id and c.kursi_id=k.kursi_id and ap.produk_id=p.produk_id and ap.artis_id=a.artis_id;
");
?>
  <div class="col-sm-9">
            <?php while($tampung=mysqli_fetch_assoc($data)): ?>
            <div class="col-md-12">
                <div class='col-md-4' style="border-style: solid;border-width: 2px;height:200px;">

                    <img src="assets/images/<?php echo $tampung['gambar']?>" alt="">

                </div>
                <div class='col-md-5' id="kotak" style="border-style: solid;border-width: 2px;height:200px;">
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
                        <input style="width:50px;height:40px" type="number" class="numeric"
                            value="<?php echo$tampung['jumlah'];?>" min='0'
                            data-id_kursi="<?php echo$tampung['kursi_id'];?>">

                    </td>
                </div>
                <div class='col-md-1'>
                    <button type="button" class="delete" data-id_kursi="<?php echo$tampung['kursi_id'];?>">Delete</button>
                </div>

            </div>
            <?php endwhile; ?>
        </div>
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
                                <th><?php echo $dataharga['harga_total']?></th>
                            </tr>
                            <tr>
                                <td>Tax</td>
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
                <div class="btn btn-success pull-left btn-fyi" onclick="window.location.href='product.php'"><span
                        class="glyphicon glyphicon-chevron-left"></span> <a style='text-decoration:none;'>Back</a></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="footerNavWrap clearfix">

                <div class="btn btn-success pull-right btn-fyi" onclick="window.location.href='choose_payment.php'"><a
                        style='text-decoration:none;'>Next</a><span class="glyphicon glyphicon-chevron-right"></span>
                </div>
            </div>
        </div>
        <?php } else {
     echo "<h2>Restricted</h2>";
 } ?>