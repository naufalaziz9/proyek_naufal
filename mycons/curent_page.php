<?php
session_start();

include("configonline.php");
$base_url="http://localhost/webdev/mycons/";
if(isset($_SESSION['cart22'])){

}else{
    $var_cart = array(
        0 => array("id"=>"b01", "nama" =>"barang1","qty"=>2,"harga_satuan" =>200),
        1 => array("id"=>"b02", "nama" =>"barang2","qty"=>3,"harga_satuan" =>400),
        2 => array("id"=>"b03", "nama" =>"barang3","qty"=>6,"harga_satuan" =>100),
    );
    $_SESSION['cart22']= $var_cart;
}
?>

<html>

<head>
    <base href="<?php echo $base_url;?>">
    <title>belajar ajax</title>
    <script src="assets/script/jquery-3.4.1.min.js"></script>
</head>

<body>
    <button type='button' class='btn-refresh'>refresh div id refresh</button>
    <div id='refresh'></div>
    <div id='cart'>
        <?php foreach( $_SESSION['cart22'] as $item_cart){
            $cetak_qty= "<input class='nud-qty' type='number' value='$item_cart[qty]' data-id_barang='".$item_cart['id']."' >";

            echo $item_cart['id'].
            "-".$item_cart['nama'].
            "-".$item_cart['harga_satuan'].
            "-".$item_cart['qty'].
            "-".$cetak_qty;

            echo "<br/>";

        } ?>

    </div>

    <script>
        $(document).ready(function () {
            $('.btn-refresh').on('click', function () {

                alert('saya ditekan');
                $.ajax({
                    url:'response_ajax.php',
                    method:'GET',
                    datatype:"html",
                    success: function(result){
                        $('#refresh').html(result);
                    }
                });

            });
                $('.nud-qty').on('change',function(){
                    alert($(this).val());
                    var idbarang= $(this).data('id_barang');
                    var qtybarang= $(this).val();

                    $.ajax({
                    url:'response_cart.php',
                    method:'POST',
                    data :{
                        id_barang:idbarang,
                        qty : qtybarang
                    },
                    datatype:"html",
                    success: function(result){
                        $('#refresh').html(result);
                    }
                });


                });
        });
    </script>
</body>

</html>