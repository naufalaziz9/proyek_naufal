<?php
session_start();
include("configonline.php");
// $sid = session_id();
// $_SESSION['sid']=$sid;

$savebyemail = mysqli_query($con,"select user_id from `user` where email='$_SESSION[nama]'"); //ngequery
$assocsave = mysqli_fetch_assoc($savebyemail); //lalu diassoc
$getuid = $assocsave['user_id']; //lalu diambil user_id
$uid = $getuid; //dimasuin ke variabel uid,uid inilah yg dipake

$first = $_POST['namedepan'];
$last = $_POST['namebelakang'];
$ema = $_POST['nameemail'];
$sub = $_POST['namesubyek'];
$pes = $_POST['namepesan'];

// $kalimat= "select contact_id from contact where email='$_SESSION[nama]'";
// $querykalimat= mysqli_query($con,$kalimat);

if(isset($_SESSION['nama'])){
    $itungcontact = mysqli_query($con,"select count(contact_id) as 'idcontact' from contact;");
    $fetchcontact  = mysqli_fetch_array($itungcontact);
    $getcid = $fetchcontact['idcontact'];
    $cid = $getcid;
    $cid++;
    $char = "con";
    $newID = $char."".$cid;
    $queryinscon = mysqli_query($con,"insert into contact(contact_id,user_id,email,nama_depan,nama_belakang,subyek,pesan)
    values ('$newID','$uid','$ema','$first','$last','$sub','$pes');");
    $associnscon = mysqli_fetch_assoc($queryinscon);
} else {
    //bikin newID2
    $itungcontact2 = mysqli_query($con,"select count(contact_id) as 'idcontact' from contact;");
    $fetchcontact2  = mysqli_fetch_array($itungcontact2);
    $getcid2 = $fetchcontact2['idcontact'];
    $cid2 = $getcid2;
    $cid2++;
    $char2 = "con";
    $newID2 = $char2."".$cid2;

    //bikin user temp id
    // $itungtemp = mysqli_query($con,"select count(user_temp_id) as 'idtemp' from contact;");
    // $fetchtemp  = mysqli_fetch_array($itungtemp);
    // $getutid = $fetchtemp['idtemp'];
    // $utid = $getutid;
    // $utid++;
    // $char3 = "utc";
    // $newID3 = $char3."".$utid;

    $queryinscon2 = mysqli_query($con,"insert into contact(contact_id,user_id,email,nama_depan,nama_belakang,subyek,pesan)
    values ('$newID2','u000','$ema','$first','$last','$sub','$pes');");
    $associnscon2 = mysqli_fetch_assoc($queryinscon2);
}

echo ' <script>
    alert("Terima kasih telah mengirim pesan kepada kami")
    window.location="contact.php"
    </script>';
?>