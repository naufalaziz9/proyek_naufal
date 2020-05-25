<?php
include("configonline.php");
$keyword=$_GET["ketik"];

$dataperhalaman=5;
$total=mysqli_query($con,"select * from produk where kategori_id='k1'");
$totaldata= mysqli_num_rows($total);

$jumlahhalaman= ceil($totaldata/$dataperhalaman);

   if( isset($_GET["halaman"])){
       $halamanaktif=$_GET["halaman"];
   }else{
       $halamanaktif=1;
   }
$awaldata=($dataperhalaman*$halamanaktif)-$dataperhalaman;

$bevan=mysqli_query($con,"select a.nama_produk,a.gambar,min(b.harga)
from (select *from produk where kategori_id='k1') a,kursi b
where a.produk_id=b.produk_id and  a.nama_produk like '%$keyword%'
group by a.nama_produk
limit $awaldata,$dataperhalaman");


?>



<div class="col-sm-12">

<!-- <p class="text-muted lead">In our Ladies department we offer wide selection of the best products we have
    found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.
</p> -->

<div class="row products" id="satu">
        <div id="kotak">
<?php while ($koko=mysqli_fetch_assoc($bevan)) : ?>

    <div class="col-md-4 col-sm-6" id="gambar">
        <div class="product">
            <div class="image">
                <a href="product.php?gambar=<?=$koko["gambar"]?>">
                    <img src="assets/images/<?php echo $koko["gambar"]?>" alt="" class="img-responsive">
                   
                </a>
            </div>
            <!-- /.image -->
            <div class="text">
                <h3><a href="product.php"><?php echo $koko["nama_produk"] ?></a></h3>
                <p class="price">Rp.<?php echo $koko["min(b.harga)"] ?></p>
                <p class="buttons">
                    <a href="product.php" class="btn btn-default">View detail</a>
                    <a href="shop-basket.php" class="btn btn-template-main"><i
                            class="fa fa-shopping-cart"></i>Add to cart</a>
                </p>
            </div>
            <!-- /.text -->
        </div>
        <!-- /.product -->
    </div>

<?php endwhile; ?>
</div>
    <!--  -->
    <!-- /.col-md-4 -->
</div>
<!-- /.products -->

<div class="row">

    <div class="col-md-12 banner">
        <a href="#">
            <img src="img/banner2.jpg" alt="" class="img-responsive">
        </a>
    </div>

</div>


<div class="pages">

    <p class="loadMore">
        <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
    </p>
    <ul class="pagination">
    <li><a href="?halaman=1">«</a>
        </li>
     <?php   if(isset($_GET["jenis"])){ 
      
          for($i=1; $i<=$jumlahhalaman;$i++) :  ?>
            <li class="active"><a href="?jenis=<?=$_GET["jenis"];?>&halaman=<?=$i; ?>"><?= $i; ?></a>
          <?php endfor; } 
      else {
         for($i=1; $i<=$jumlahhalaman;$i++) :  ?>
             <li class="active"><a href="?halaman=<?=$i; ?>"><?= $i; ?></a>

         <?php  endfor; } ?>

    </ul>

</div>


</div>