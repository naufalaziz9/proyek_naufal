<?php

include("configonline.php");
$username = $_POST['usernameregris'];
$password = $_POST['regrispassword'];
$email=$_POST['emailregris'];
$cekuser= mysqli_num_rows(mysqli_query($con,"select *from `user` where email='$email' or nama='$username'"));

 if ($cekuser>0){
 

   echo '<script>
   alert ("email atau username Sudah Ada Yang Menggunakan");
   window.location="signup.php";
   </script>';
   
}else{

    $query2 = mysqli_query($con,"select max(user_id) as 'maxKode' from `user`");
    $data  = mysqli_fetch_array($query2);
    
    
    $kodeBarang = $data['maxKode'];
    
    $noUrut = (int) substr($kodeBarang, 3, 3);
    
    // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
    $noUrut++;
    
    
    
    // membentuk kode anggota baru
    // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
    // misal sprintf("%03s", 12); maka akan dihasilkan '012'
    // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
    $char = "u";
    $newID = $char . sprintf("%03s", $noUrut);
    $query = mysqli_query($con,"insert into `user` values('$newID','$username','$email','".sha1($password)."','','','s1');");
    $cek = mysqli_num_rows($query);
    echo $cek;
    header("location:homepagelogin.php");
}




?>
