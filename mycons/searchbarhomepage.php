<?php 
session_start();
if($_GET){
    include("configonline.php");
$hasil=$_GET;
$pencarian=$hasil['ketik'];
$bevan=mysqli_query($con,"select a.nama_produk,a.gambar,min(b.harga)
from (select *from produk) a,kursi b
where a.produk_id=b.produk_id and  a.nama_produk like '%$pencarian%'
group by a.nama_produk
limit 0,4");

?>
  <?php while($musik=mysqli_fetch_assoc($bevan)): ?>
        <div class="col-sm-6 col-md-3">
            <div class="box-image">
                <div class="image">
                    <img src="assets/images/<?php echo $musik["gambar"]?>" alt="" class="img-responsive">
                </div>
                <div class="bg"></div>
                <div class="name">
                    <h3><a href="product.php"><?php echo $musik["nama_produk"]?></a></h3>
                </div>
                <div class="text">
                    <p class="hidden-sm hidden-lg hidden-md">Pellentesque habitant morbi tristique senectus et netus et
                        malesuada</p>
                    <p class="buttons">
                        <a href="product.php?gambar=<?=$musik["gambar"]?>"
                            class="btn btn-template-transparent-primary">View</a>
                    </p>
                </div>
            </div>

        </div>
        <?php endwhile; }?>