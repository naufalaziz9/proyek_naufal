<?php
session_start();
 if($_POST){
    include("configonline.php");
    $p=$_POST;
    $idbarang= $p['id_kursi'];
    $qtybarang= $p['qty'];
    
    //UPDATE LOGIC
    $updatejumlah=mysqli_query($con,"update cart_produk set jumlah='$qtybarang' where cart_id='$_SESSION[cart_id]'and kursi_id='$idbarang';");
    $harga2=mysqli_query($con,"update cart c inner join kursi k inner join cart_produk cp
    set cp.subtotal=k.harga*cp.jumlah
    where c.cart_id=cp.cart_id and cp.kursi_id=k.kursi_id and cp.kursi_id='$idbarang' and cp.cart_id='$_SESSION[cart_id]';");
    /*foreach($_SESSION['cart22'] as $key => $value){
        $item_cart= $value;
        if($item_cart['id']== $idbarang){
            //$item_cart['qty']=$qtybarang;
            $_SESSION['cart22'][$key]['qty']=$qtybarang;
        }

    }*/
    $subtotal=mysqli_query($con,"select sum(subtotal) as aa from cart_produk cp where cp.cart_id='$_SESSION[cart_id]' ;");
    $assocsubtotal=mysqli_fetch_assoc($subtotal);
    // $subtotal33=mysqli_query($con,"update cart c inner join cart_produk cp set harga_total='$assocsubtotal[aa]' where c.cart_id=cp.cart_id and cp.cart_id='$_SESSION[cart_id]' ;");
   
    // $harga=mysqli_query($con,"SELECT * FROM cart c where cart_id='$_SESSION[cart_id]';");
    // $datahargarevisi=mysqli_fetch_assoc($harga);
  

    $tax= $assocsubtotal['aa']*0.1;
    $total=$assocsubtotal["aa"]+$tax;
    $updatetotal=mysqli_query($con,"update cart set harga_total='$total' where cart_id='$_SESSION[cart_id]';");

    $final=mysqli_query($con,"SELECT * FROM cart c where cart_id='$_SESSION[cart_id]';");
   
    $_SESSION["total"]=$total;
    $_SESSION["tax"]=$tax;
    //RESPONSE: SELECT CART
    // echo "<h1>berhasil update dengan id=$qtybarang dan $idbarang</h1>";

?>
    <div class="box" id="order-summary">
        <div class="box-header">
            <h3>Order summary</h3>
        </div>


        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Order subtotal</td>
                        <th><?php echo $assocsubtotal['aa']?></th>
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
 <?php } else {
     echo "<h2>Restricted</h2>";
 } ?>